<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album;

use Album\Controller\AlbumController;
use Album\Model\AlbumTable;
use Album\ServiceFactory\Controller\AlbumControllerFactory;
use Album\ServiceFactory\Model\AlbumTableFactory;
use Zend\Mvc\Router\Http\Segment;

return array(
    'router' => array(
        'routes' => array(
            'album' => array(
                'type' => Segment::class,
                'options' => array(
                    'route' => '/album[/:action[/:id]]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            AlbumTable::class => AlbumTableFactory::class,
        ),
    ),
    'controllers' => array(
        'factories' => array(
            AlbumController::class => AlbumControllerFactory::class
        ),
    ),
);