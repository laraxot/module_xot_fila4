<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

class XotData
{
    /**
     * Xot data container.
     */
    public function __construct(
        public readonly array $config = []
    ) {}
}