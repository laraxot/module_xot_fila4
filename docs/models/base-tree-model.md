# BaseTreeModel Documentation

## Overview

`BaseTreeModel` is an abstract base class that provides tree structure functionality for models in the Laraxot ecosystem.

## Purpose

This class serves as the foundation for all models that need hierarchical relationships, ensuring:
- **Type Safety**: Full PHPStan Level 10 compliance
- **Consistency**: Standardized tree behavior across modules
- **Extensibility**: Easy customization for specific requirements

## Class Definition

```php
abstract class BaseTreeModel extends BaseModel implements HasRecursiveRelationshipsContract
{
    use TypedHasRecursiveRelationships;
}
```

## Inheritance Hierarchy

```
BaseModel
└── BaseTreeModel
    ├── LimeQuestion (Limesurvey module)
    ├── Category (various modules)
    └── [Other tree models]
```

## Key Features

### 1. Contract Implementation
- Implements `HasRecursiveRelationshipsContract`
- Provides type-safe recursive relationship methods
- Ensures PHPStan Level 10 compliance

### 2. Trait Integration
- Uses `TypedHasRecursiveRelationships` trait
- Wraps vendor package with type safety
- Provides method aliasing for consistency

### 3. BaseModel Inheritance
- Inherits all base model functionality
- Maintains connection to module-specific database
- Preserves standard Laravel model behavior

## Usage Patterns

### Basic Tree Model
```php
class Category extends BaseTreeModel
{
    protected $connection = 'my_module';
    protected $table = 'categories';
    
    // Inherits all tree functionality
}
```

### Custom Key Names
```php
class LimeQuestion extends BaseTreeModel
{
    public function getParentKeyName(): string
    {
        return 'parent_qid';  // Custom parent key
    }
    
    public function getLocalKeyName(): string
    {
        return 'qid';  // Custom primary key
    }
}
```

### Custom Depth/Path Names
```php
class CustomTree extends BaseTreeModel
{
    public function getDepthName(): string
    {
        return 'tree_depth';  // Custom depth column
    }
    
    public function getPathName(): string
    {
        return 'tree_path';   // Custom path column
    }
}
```

## Available Methods

### Navigation Methods
```php
$model->parent;              // Get direct parent
$model->children;            // Get direct children
$model->ancestors();         // Get all ancestors
$model->descendants();       // Get all descendants
$model->siblings();          // Get siblings
$model->rootAncestor();      // Get root ancestor
```

### Advanced Navigation
```php
$model->ancestorsAndSelf();     // Ancestors including self
$model->descendantsAndSelf();   // Descendants including self
$model->bloodline();            // Complete tree
$model->parentAndSelf();        // Parent and self
$model->siblingsAndSelf();      // Siblings and self
```

### Utility Methods
```php
$model->getDepth();             // Get node depth
$model->getPath();              // Get node path
$model->isRoot();               // Check if root
$model->isLeaf();               // Check if leaf
$model->hasChildren();          // Check if has children
```

## Database Requirements

### Required Columns
```sql
-- Primary key (can be customized)
id BIGINT PRIMARY KEY

-- Parent key (can be customized with getParentKeyName())
parent_id BIGINT NULL

-- Optional but recommended
depth INT NULL
path VARCHAR(255) NULL
```

### Indexes for Performance
```sql
-- Performance indexes
INDEX idx_parent_id (parent_id);
INDEX idx_depth (depth);
INDEX idx_path (path);
```

## Configuration Options

### Custom Column Names
Override these methods in your model:

```php
public function getParentKeyName(): string
{
    return 'custom_parent_id';
}

public function getLocalKeyName(): string
{
    return 'custom_id';
}

public function getDepthName(): string
{
    return 'custom_depth';
}

public function getPathName(): string
{
    return 'custom_path';
}
```

### Custom Path Separator
```php
public function getPathSeparator(): string
{
    return '.';  // Default: '/'
}
```

## Performance Considerations

### Database Optimization
1. **Add proper indexes** on parent_id, depth, and path columns
2. **Use depth constraints** for deep trees: `withMaxDepth(5)`
3. **Consider materialized paths** for very large trees

### Query Optimization
```php
// Efficient queries with depth limits
$descendants = $model->descendants()->withMaxDepth(3)->get();

// Eager loading to prevent N+1
$nodes = TreeModel::with(['ancestors', 'children'])->get();
```

## Integration Examples

### Limesurvey Module
```php
class LimeQuestion extends BaseTreeModel
{
    protected $connection = 'limesurvey';
    protected $table = 'lime_questions';
    
    public function getParentKeyName(): string
    {
        return 'parent_qid';
    }
    
    public function getLocalKeyName(): string
    {
        return 'qid';
    }
}
```

### Menu System
```php
class MenuItem extends BaseTreeModel
{
    protected $table = 'menu_items';
    
    public function getParentKeyName(): string
    {
        return 'parent_id';
    }
    
    // Custom methods
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
}
```

## Testing Tree Models

### Unit Test Example
```php
class LimeQuestionTest extends TestCase
{
    public function test_tree_relationships()
    {
        $parent = LimeQuestion::create(['title' => 'Parent']);
        $child = LimeQuestion::create([
            'title' => 'Child',
            'parent_qid' => $parent->qid
        ]);
        
        $this->assertEquals($parent->qid, $child->parent->qid);
        $this->assertTrue($parent->children->contains($child));
        $this->assertTrue($child->ancestors->contains($parent));
    }
}
```

## Migration from Other Tree Libraries

### From Nested Sets
```php
// Before: Nested sets
class OldModel extends Model {
    use Kalnoy\Nestedset\NodeTrait;
}

// After: Adjacency list with BaseTreeModel
class NewModel extends BaseTreeModel {
    // Automatic tree functionality
}
```

### From Custom Implementation
```php
// Before: Manual parent/child
class OldModel extends Model {
    public function parent() {
        return $this->belongsTo(self::class, 'parent_id');
    }
    
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }
}

// After: Full tree functionality
class NewModel extends BaseTreeModel {
    // Inherits parent(), children(), ancestors(), descendants(), etc.
}
```

## Best Practices

1. **Always extend BaseTreeModel** for new tree structures
2. **Customize only necessary methods** (key names, column names)
3. **Add database indexes** for performance
4. **Use depth constraints** for large trees
5. **Test tree relationships** thoroughly
6. **Document custom configurations** in model PHPDoc

## Troubleshooting

### Common Issues
1. **"Method not found"**: Ensure model extends BaseTreeModel
2. **Type errors**: Check return type declarations
3. **Performance issues**: Add missing database indexes
4. **Infinite recursion**: Verify data integrity

### Debug Tools
```php
// Check tree integrity
$model->ancestors()->count();  // Should not cause infinite loop
$model->descendants()->count();  // Should be reasonable number

// Verify parent/child relationships
$model->parent;  // Should return single model or null
$model->children;  // Should return collection
```

## Related Documentation

- [HasRecursiveRelationshipsContract](contracts/has-recursive-relationships-contract.md)
- [TypedHasRecursiveRelationships Trait](traits/typed-has-recursive-relationships.md)
- [Laravel Adjacency List Package](https://github.com/staudenmeir/laravel-adjacency-list)