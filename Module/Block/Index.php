<?php

namespace AHT\Module\Block;

class Index extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\AHT\Module\Model\PostRepository $postRepository,
		\AHT\Module\Model\PostFactory $postFactory
	) {
		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
	}

	public function getPosts()
	{
		$collection = $this->postRepository->getList();
		return $collection;
	}
}
