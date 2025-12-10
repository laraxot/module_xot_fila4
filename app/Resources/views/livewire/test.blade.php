<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<?php

declare(strict_types=1);

?>
<div>
    <div class="btn-group group-toggle">
        <label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="cats" /> Cats
        </label>
        <label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="dogs" /> Dogs
        </label>
        <label class="btn btn-danger">
<<<<<<< HEAD
<<<<<<< HEAD
<div>
    <div class="btn-group group-toggle">
        <label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="cats" /> Cats
        </label>
        <label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="dogs" /> Dogs
        </label>
        <label class="btn btn-danger">
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
<div>
    <div class="btn-group group-toggle">
        <x-filament-forms::field-wrapper.label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="cats" /> Cats
        </label>
        <x-filament-forms::field-wrapper.label class="btn btn-danger">
            <input wire:model="animal" name="animal" type="radio" value="dogs" /> Dogs
        </label>
        <x-filament-forms::field-wrapper.label class="btn btn-danger">
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            <input wire:model="animal" name="animal" type="radio" value="both" /> Both
        </label>
    </div>
    [{{ $animal }}]
    <hr />
    {{--
    https://forum.laravel-livewire.com/t/unable-to-get-checkbox-value/157/7
    --}}

    <div class="mb-4">
        @foreach ($options as $key => $option)
            <div>
<<<<<<< HEAD
<<<<<<< HEAD
                <label class="inline-flex items-center">
<<<<<<< HEAD
                <x-filament-forms::field-wrapper.label class="inline-flex items-center">
=======
=======
                <x-filament-forms::field-wrapper.label class="inline-flex items-center">
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                <label class="inline-flex items-center">
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                    <input wire:model="options.{{ $key }}" name="options[{{ $key }}]" value="1" type="checkbox">
                    <span class="ml-2">{{ $key }}</span>
                </label>
            </div>
        @endforeach
    </div>

    @foreach ($options as $key => $option)
        {{ $key }}: {{ $option ? 'true' : 'false' }}<br />
    @endforeach
    <hr />
    @for ($i = 0; $i < 3; $i++)
        <h3>{{ $i }}</h3>
        <div class="btn-group btn-group-toggle">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            <label class="btn btn-danger">
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="-1" />
                <span>-</span>
            </label>
            <label class="btn btn-secondary">
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="0" />
                <span>&nbsp;</span>
            </label>
            <label class="btn btn-primary">
<<<<<<< HEAD
<<<<<<< HEAD
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="-1" />
                <span>-</span>
            </label>
            <label class="btn btn-secondary">
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="0" />
                <span>&nbsp;</span>
            </label>
            <label class="btn btn-primary">
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
            <x-filament-forms::field-wrapper.label class="btn btn-danger">
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="-1" />
                <span>-</span>
            </label>
            <x-filament-forms::field-wrapper.label class="btn btn-secondary">
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="0" />
                <span>&nbsp;</span>
            </label>
            <x-filament-forms::field-wrapper.label class="btn btn-primary">
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                <input type="radio" wire:model="qty1.{{ $i }}" name="qty1[{{ $i }}]" value="1" />
                <span>+</span>
            </label>
        </div>
    @endfor
    <pre>{{ print_r($qty1) }}</pre>
    <hr />



    @foreach ($products as $product)
        <h3>{{ $product->title }}</h3>
        @foreach ($change_cats as $change_cat)
            <h4>[{{ $change_cat-> }}]{{ $change_cat->title }}</h4>
            @foreach ($changes->where('id_cat', $change_cat->) as $change)
                <h5>[{{ $change-> }}]{{ $change->title }}</h5>


                <div class="btn-group btn-group-toggle">
<<<<<<< HEAD
<<<<<<< HEAD
                    <label class="btn btn-danger">
<<<<<<< HEAD
                    <x-filament-forms::field-wrapper.label class="btn btn-danger">
=======
=======
                    <x-filament-forms::field-wrapper.label class="btn btn-danger">
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                    <label class="btn btn-danger">
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                        <input type="radio" wire:model="qty.{{ $change_cat-> }}.{{ $change-> }}"
                            name="qty[{{ $change_cat-> }}][{{ $change-> }}]" autocomplete="off" value="-1">
                        @if (isset($qty[$change_cat->][$change->]) && $qty[$change_cat->][$change->] == -1)
                            [-]
                        @else
                            -
                        @endif
                    </label>
<<<<<<< HEAD
<<<<<<< HEAD
                    <label class="btn btn-secondary">
<<<<<<< HEAD
                    <x-filament-forms::field-wrapper.label class="btn btn-secondary">
=======
=======
                    <x-filament-forms::field-wrapper.label class="btn btn-secondary">
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                    <label class="btn btn-secondary">
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                        <input type="radio" wire:model="qty.{{ $change_cat-> }}.{{ $change-> }}"
                            name="qty[{{ $change_cat-> }}][{{ $change-> }}]" autocomplete="off" value="0">
                        @if (isset($qty[$change_cat->][$change->]) && $qty[$change_cat->][$change->] == 0)
                            [&nbsp;]
                        @else
                            &nbsp;
                        @endif
                    </label>
<<<<<<< HEAD
<<<<<<< HEAD
                    <label class="btn btn-primary active">
<<<<<<< HEAD
                    <x-filament-forms::field-wrapper.label class="btn btn-primary active">
=======
=======
                    <x-filament-forms::field-wrapper.label class="btn btn-primary active">
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                    <label class="btn btn-primary active">
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                        <input type="radio" wire:model="qty.{{ $change_cat-> }}.{{ $change-> }}"
                            name="qty[{{ $change_cat-> }}][{{ $change-> }}]" autocomplete="off" value="1">
                        @if (isset($qty[$change_cat->][$change->]) && $qty[$change_cat->][$change->] == 1)
                            [+]
                        @else
                            +
                        @endif
                    </label>
                </div>
            @endforeach
        @endforeach
    @endforeach




    <pre>
    {{ print_r($qty) }}
    </pre>
    ---------------------------------
</div>
