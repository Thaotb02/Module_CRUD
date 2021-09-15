<?php

namespace AHT\Module\Block;

class Create extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\AHT\Module\Model\PostFactory $postFactory,
		\AHT\Module\Model\PostRepository $postRepository
	) {
		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
	}
}
