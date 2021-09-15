<?php

namespace AHT\Module\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

	protected function _construct()
	{
		$this->_init('AHT\Module\Model\Post', 'AHT\Module\Model\ResourceModel\Post');
	}
}
