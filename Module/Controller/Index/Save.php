<?php

namespace AHT\Module\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
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

		$post = $this->_postFactory->create();

		if (isset($_POST['editbtn'])) {
			$post->setId($_POST['editbtn']);
			$post->setName($_POST['name']);
			$post->setContent($_POST['content']);
			$post->setStatus($_POST['status']);
			$post->setUpdatedAt(date('Y-m-d H:i:s'));
		} elseif (isset($_POST['createbtn'])) {
			$post->setName($_POST['name']);
			$post->setContent($_POST['content']);
			$post->setStatus($_POST['status']);
			$post->setCreatedAt(date('Y-m-d H:i:s'));
			$post->setUpdatedAt(date('Y-m-d H:i:s'));
		}

		$this->_postRepository->save($post);
		$this->_pageFactory->create();
		return $this->_redirect('post/index/index');
	}
}
