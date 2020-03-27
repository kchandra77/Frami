<?php
 
namespace Frami;
 
use Frami\Database\ConnectMySql;
 
class AbstractRepository
{
    protected $db;
 
    public function __construct()
    {
        $connect = ConnectMySql::getInstance();
        $this->db = $connect->getPDO();
    }
}
