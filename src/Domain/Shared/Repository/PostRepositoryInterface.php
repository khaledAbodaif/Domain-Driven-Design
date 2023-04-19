<?php


interface PostRepositoryInterface
{

    public function get(array $columns=['*'],array $relations=[],array $appends=[],array $hidden=[]);

    public function find($model_id,array $columns=['*'],array $relations=[],array $appends=[]);

    public function create(array $request);

    public function update(array $request, $id);

    public function delete($id);


}
