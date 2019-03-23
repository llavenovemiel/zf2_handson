<?php
/**
 * Created by PhpStorm.
 * User: novemiel.l
 * Date: 3/23/2019
 * Time: 10:34 AM
 */

namespace Album\ServiceFactory\Controller;

use Album\Controller\AlbumController;
use Album\Model\AlbumTable;
use Psr\Container\ContainerInterface;


class AlbumControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $container = $container->getServiceLocator();
        $AlbumTable = $container->get(AlbumTable::class); //why?

        return new AlbumController($AlbumTable);
    }
}