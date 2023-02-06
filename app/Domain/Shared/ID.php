<?php declare(strict_types=1);

namespace App\Domain\Shared;

use Symfony\Component\Uid\Ulid;

abstract class ID
{
    protected function __construct(public readonly string $value)
    {}

    // -------- private functions --------

    // -------- static functions --------

    static public function gen(): static
    {
        return new static((new Ulid())->toBase32());
    }

    static public function from(string $id): static
    {
        return new static(Ulid::fromString($id)->toBase32());
    }
}