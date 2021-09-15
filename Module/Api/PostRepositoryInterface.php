<?php

namespace AHT\Module\Api;

interface PostRepositoryInterface
{

    public function save($Post);

    public function getById($PostId);

    public function delete($Post);

    public function deleteById($PostId);
}
