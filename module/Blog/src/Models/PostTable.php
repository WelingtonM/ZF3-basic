<?php
namespace Blog\Models;

use Zend\Db\TableGateway\TableGatewayInterface;

class PostTable
{
    /**
     * @var Zend\Db\TableGateway\TableGatewayInterface $tableGateway
     */
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

}

