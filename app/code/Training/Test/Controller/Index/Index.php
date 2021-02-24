<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.02.2021
 * Time: 22:07
 */

namespace Training\Test\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    private $resultRawFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    )
    {
        $this->resultRawFactory = $resultRawFactory;
        parent:: __construct($context);
    }

    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');
    }
}