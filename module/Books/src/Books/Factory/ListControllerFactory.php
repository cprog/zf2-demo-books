<?php
/**.
 * Date: 2/14/16
 * Time: 7:51 AM
 * File: ListControllerFactory.php
 */

namespace Books\Factory;

use Books\Controller\ListController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ListControllerFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $listService        = $realServiceLocator->get('Books\Service\ListServiceInterface');

        return new ListController($listService);
    }

}