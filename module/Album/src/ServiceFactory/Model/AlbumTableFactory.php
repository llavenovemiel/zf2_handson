<?php
/**
 * Created by PhpStorm.
 * User: novemiel.l
 * Date: 3/23/2019
 * Time: 11:28 AM
 */

namespace Album\ServiceFactory\Model;

use Album\Model\Album;
use Album\Model\AlbumTable;
use Psr\Container\ContainerInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class AlbumTableFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('test');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Album());

        $tableGateway = new TableGateway(
            'album',
            $dbAdapter,
            null,
            $resultSetPrototype
        );

        return new AlbumTable($tableGateway);
    }
}