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
<<<<<<< HEAD
    protected string $view = 'xot::filament.widgets.clock';
=======
    protected static string $view = 'xot::filament.widgets.clock';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($this->start === 'impossible') {
=======
            if ('impossible' === $this->start) {
>>>>>>> 5a14301c (.)
=======
            if ('impossible' === $this->start) {
>>>>>>> 5a14301c (.)
=======
            if ('impossible' === $this->start) {
>>>>>>> 5a14301c (.)
=======
            if ('impossible' === $this->start) {
>>>>>>> 5a14301c (.)
=======
            if ('impossible' === $this->start) {
>>>>>>> 5a14301c (.)
                $cond = false;
            }
        }
    }
}
