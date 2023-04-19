<?php

class CommentRepository extends  BasePostRepository implements PostRepositoryInterface
{

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

}
