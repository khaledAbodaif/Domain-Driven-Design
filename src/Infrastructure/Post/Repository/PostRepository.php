<?php

class PostRepository extends  BasePostRepository implements PostRepositoryInterface
{

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

}
