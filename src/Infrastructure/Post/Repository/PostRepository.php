<?php

class PostRepository extends  BaseRepository
{

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

}
