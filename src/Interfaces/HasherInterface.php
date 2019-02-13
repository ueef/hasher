<?php
declare(strict_types=1);

namespace Ueef\Hasher\Interfaces;

interface HasherInterface
{
    public function hash(string $string): string;
    public function compare(string $string, string $hash): bool;
}

