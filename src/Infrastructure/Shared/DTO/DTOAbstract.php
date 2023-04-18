<?php

namespace DTO;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DTOAbstract
{

    public bool $status = true;

    public ?string $message = '';


    public Collection $collection;

    public array|Collection|null|LengthAwarePaginator|Model $response;

    public int $paginate = 10;

    public array $searchItems = [];

    public string $ordering_filed = 'id';

    public string $ordering_dir = 'desc';

    public function makeFromArray(array $request): void
    {
        foreach ($request as $key => $value) {
            $this->{$key} = $value;
        }

        $this->collection = collect($request);
    }

}
