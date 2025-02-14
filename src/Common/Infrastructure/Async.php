<?php

declare(strict_types=1);

namespace AlephTools\DDD\Common\Infrastructure;

interface Async
{
    /**
     * Asynchronously executes (in background) a callback.
     *
     */
    public function run(mixed $callback, array $params = []): void;
}
