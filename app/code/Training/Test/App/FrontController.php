<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.02.2021
 * Time: 22:29
 */

namespace Training\Test\App;
class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterListInterface
     */
    protected $_routerList;
    /**
     * @var \Magento\Framework\App\ResponseInterface
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Magento\Framework\App\RouterListInterface $routerList
     * @param \Magento\Framework\App\ResponseInterface $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        return parent:: dispatch($request);
    }
}