<?php

namespace AHT\Module\Block;

class Edit extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	private $_coreRegistry;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\AHT\Module\Model\PostFactory $postFactory,
		\AHT\Module\Model\PostRepository $postRepository,
		\Magento\Framework\Registry $coreRegistry
	) {

		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
		$this->_coreRegistry = $coreRegistry;
	}
	public function getPost()
	{
		$post_id = $this->_coreRegistry->registry('post_id');
		$post = $this->postRepository->getById($post_id);
		return $post;
	}
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}
