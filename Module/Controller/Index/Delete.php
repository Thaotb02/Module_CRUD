<?php

namespace AHT\Module\Controller\Index;

class Delete extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	protected $_postRepository;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\AHT\Module\Model\PostFactory $postFactory,
		\AHT\Module\Model\PostRepository $postRepository
	) {
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		$this->_postRepository = $postRepository;
		return parent::__construct($context);
	}

	public function execute()
	{
		$post_id = $this->getRequest()->getParam('post_id');
		$this->_postRepository->deleteById($post_id);
		$this->_pageFactory->create();
		return $this->_redirect('post/index/index');
	}
}
