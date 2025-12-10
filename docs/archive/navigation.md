---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---

# Navigation {#navigation}

The navigation menu in the left-hand sidebar is defined using an array in `navigation.php`. Nested pages can be added by using the `children` associative array.

```php
<?php
// navigation.php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
        'children' => [
            'Customizing Your Site' => 'docs/customizing-your-site',
            'Navigation' => 'docs/navigation',
            'Algolia DocSearch' => 'docs/algolia-docsearch',
            'Custom 404 Page' => 'docs/custom-404-page',
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 85cdef688 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 6ca989d8 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 091f883c (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 67be6ac0 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> 2bad128c (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 59259b43 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 88ee35c4e (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> aba62c408 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 92cca5ade (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> f8f76a284 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 5cb992cc6 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 6a52563d6 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> 5e6e0d054 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 3c8d62b79 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 317b552da (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> 6cba4fe (.)
>>>>>>> 0117b849c (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 60f0a1820 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 80bc07e81 (.)
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
>>>>>>> 414a4ffcb (.)
];

// config.php
'navigation' => require_once('navigation.php'),

// blade files
$page->navigation
```
### Versione HEAD


## Collegamenti tra versioni di navigation.md
* [navigation.md](../../../Gdpr/docs/navigation.md)
* [navigation.md](../../../Xot/docs/navigation.md)
* [navigation.md](../../../UI/docs/navigation.md)
* [navigation.md](../../../Cms/docs/blocks/navigation.md)
* [navigation.md](../../../Cms/docs/navigation.md)
* [navigation.md](../../../Cms/docs/components/navigation.md)


### Versione Incoming


---

