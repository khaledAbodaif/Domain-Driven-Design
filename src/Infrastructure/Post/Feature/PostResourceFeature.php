<?php

namespace Feature;

use DTO\DTOInterface;

class PostResourceFeature implements \PostResourceFeature
{

    public function __construct(public DTOInterface $DTO)
    {
    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }

    public function find(): void
    {
        // TODO: Implement find() method.
    }
}
