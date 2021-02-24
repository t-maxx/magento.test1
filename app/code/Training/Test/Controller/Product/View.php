<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.02.2021
 * Time: 22:54
 */

namespace Training\Test\Controller\Product;

use \Magento\Framework\Exception\NoSuchEntityException;

class View extends \Magento\Cms\Controller\Page\View
{
    protected $customerSession;
    protected $redirectFactory;
    protected $pageRepository;
    protected $resultForwardFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Cms\Api\PageRepositoryInterface $pageRepository
    )
    {
        $this->customerSession = $customerSession;
        $this->pageRepository = $pageRepository;
        $this->redirectFactory = $redirectFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        parent:: __construct($context);
    }

    public function execute()
    {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->redirectFactory->create()->setPath('customer/account/login');
        }
        return parent:: execute();
    }
}