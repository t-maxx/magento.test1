<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.02.2021
 * Time: 23:29
 */

namespace Training\Test\App\Router;
class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerPath = 'index';
        $controllerName = 'index';
        $request->setModuleName($moduleName)
            ->setControllerName($controllerPath)
            ->setActionName($controllerName);
        return true;
    }
}