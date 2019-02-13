<?php
namespace Manager\Db;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\Sql\Insert;
use Zend\Db\TableGateway\TableGateway;
use Zend\Authentication\Adapter\DbTable\CredentialTreatmentAdapter as AuthAdapter;
use Zend\Authentication\AuthenticationService;


class Modules
{
    
    //private $adapter;
    
    public function __construct($driverConfig = '')
    {   
        $this->adapter      = new Adapter($driverConfig);
        //$this->tableGateway = new TableGateway($table, $this->getAdapter());
    }
    
    private static function getInstance($instance, $param = '')
    {
        return new $instance($param);
    }
    
    public function save($table, $data)
    { 
        $adapter = new Adapter(require __DIR__ . '/../../../../../config/autoload/global.php');
        //$save = $adapter->query("INSERT INTO " . $table . " (name, user, email, password) VALUES " . $data . "");
        //return $save->execute();
        
        /**
         * table that need to be inserted
         */
        $db = new TableGateway($table, $this->adapter);
        return $db->insert($data);
        
        
    }
    
    public function tableGateway($table)
    {
        
        $db = new TableGateway($table, $this->adapter);
        return $db;
        
        
    }
    
    public function authAdapter()
    {
        return new AuthAdapter($this->adapter);
        
    }
    
    public function dbAdapter()
    {
        return new Adapter(require __DIR__ . '/../../../../../config/autoload/global.php');
        
    }
    
    public function authService($authAdapter = '')
    {
        return new AuthenticationService();
    }
    
    public function show($table, $data)
    { 
        // search for at most 2 artists who's name starts with Brit, ascending
        $db = new TableGateway($table, $this->adapter);
        
        //$table = new TableGateway($table, $adapter);
        $rowset = $db->select($data);
        //$row = $rowset->current();
        return $rowset;
        /*$rowset = $db->select(function (Select $select) {
            $select->where->like('name', 'Brit%');
            $select->order('name ASC')->limit(2);
        });*/
        
    }
    
    public function update($table, $data)
    {
        // search for at most 2 artists who's name starts with Brit, ascending
        $db = new TableGateway($table, $this->adapter);
        
        if(is_array($data)){
            //$table = new TableGateway($table, $this->adapter, new Feature\RowGatewayFeature('id'));
            $results = $db->select($data);
            
            $row = $results->current(); 
        }
        
        return $row;
        /*$row->name = 'New Name';
        $row->save();*/
    }
    
    
    
}

