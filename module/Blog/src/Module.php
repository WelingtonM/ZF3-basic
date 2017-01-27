<?php
namespace Blog;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Blog\Controller\BlogController;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Models\PostTable::class => function ($container) {
                    $tableGateway = $container->get(Models\PostTableGateway::class);
                    return new Models\PostTable($tableGateway);
                },
                Models\PostTableGateway::class => function($container){
                    $dbAdapater = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Models\Post());
                    return new TableGateway('posts', $dbAdapater, null, $resultSetPrototype);
                }
            ]
        ];
    }

    public function getControllerConfig()
    {
       return [
           'factories' => [
               BlogController::class => function($container){
                   return new BlogController(
                       $container->get(Models\PostTable::class)
                   );
               }
           ]
       ];
    }
}

