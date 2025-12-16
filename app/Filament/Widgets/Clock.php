<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

// use Symfony\Component\Console\Output\BufferedOutput;

use Filament\Widgets\Widget;

class Clock extends Widget
{
    public string $start = '';

<<<<<<< HEAD
    protected string $view = 'xot::filament.widgets.clock';
=======
    protected string $view = 'xot::filament.widgets.clock';
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
    protected string $view = 'xot::filament.widgets.clock';
    protected string $view = 'xot::filament.widgets.clock';
=======
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 0117b849c (.)
=======
<<<<<<< HEAD
    protected string $view = 'xot::filament.widgets.clock';
=======
    protected static string $view = 'xot::filament.widgets.clock';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> 59259b43 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 5cb992cc6 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 3c8d62b79 (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> 60f0a1820 (.)
>>>>>>> 38b70c7ba (.)

    public function begin(): void
    {
        // while ($this->start >= 0) {
        $cond = true;
        while ($cond) {
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->start,
                replace: true,
            );

            // Pause for 1 second between numbers...
            // sleep(1);

            // Decrement the counter...
            // $this->start = $this->start - 1;
            $this->start = (string) now();
<<<<<<< HEAD
            if ($this->start === 'impossible') {
=======
            if ($this->start === 'impossible') {
<<<<<<< HEAD
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ($this->start === 'impossible') {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
            if ('impossible' === $this->start) {
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
                $cond = false;
            }
        }
    }
}
