<?php

declare(strict_types=1);

namespace Modules\Xot\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommandOutputEvent implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(
        public string $processId,
        public string $output,
        public string $type = 'output',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {
    }
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
>>>>>>> 7468a7d2 (.)
=======
    ) {}
>>>>>>> dbce41cec (.)
=======
    ) {
    }
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ) {}
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
    ) {}
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
    ) {}
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
    ) {}
>>>>>>> aba62c408 (.)

    /**
     * @return list<Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel("command.{$this->processId}"),
        ];
    }

    public function broadcastAs(): string
    {
        return 'CommandOutput';
    }

    /**
     * @return array<string, mixed>
     */
    public function broadcastWith(): array
    {
        return [
            'processId' => $this->processId,
            'output' => $this->output,
            'type' => $this->type,
            'timestamp' => now()->toIso8601String(),
        ];
    }
}
