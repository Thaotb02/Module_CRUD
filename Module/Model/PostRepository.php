<?php

namespace AHT\Module\Model;

use AHT\Module\Api\Data\PostInterfaceFactory;
use AHT\Module\Model\PostFactory;
use AHT\Module\Model\ResourceModel\Post;
use AHT\Module\Model\ResourceModel\Post\CollectionFactory;

class PostRepository
{

    protected $resource;

    protected $PostFactory;

    protected $CollectionFactory;

    public function __construct(Post $resource,PostFactory $PostFactory,PostInterfaceFactory $dataPostFactory,CollectionFactory $CollectionFactory
    ) {
        $this->resource = $resource;
        $this->PostFactory = $PostFactory;
        $this->CollectionFactory = $CollectionFactory;
    }

    public function save($Post)
    {
        return $this->resource->save($Post);
    }

    public function getById($PostId)
    {
        $Post = $this->PostFactory->create();
        return $Post->load($PostId);
    }

    public function getList()
    {

        return $this->CollectionFactory->create();
    }

    public function delete($Post)
    {
           return $this->resource->delete($Post);
    }

    public function deleteById($PostId)
    {
        return $this->delete($this->getById($PostId));
    }
}
