<?php
namespace Manager\Db\Sql;

use Manager\Db\DbManager;
use Zend\Db\Sql\Sql as zendSql;

class Sql extends AbstractSql
{
    
    const COUNT_ERROR = 'error';
    
    public function __construct($data)
    {
        $this->getData($data);
        $db  = new DbManager($this->getPath());
        
        $this->dbManager    = $db;
        $this->table        = $this->getTable();
        
        if(!is_null($this->table))
            $this->tableGateway = $this->dbManager->tableGateway($this->table);
        
    }
    
    public function sql()
    {
        $sql = new zendSql($this->tableGateway->getAdapter());
        //$this->tableGateway->getSql()->setTable($this->getTable());
        return $sql;
    }
    
    
    
    public function config(array $data)
    {
        if(!is_array($data)){
            throw new \Exception(sprintf(
                'An error occurred: $data must be a array'
            ));
        }
        
        $this->getData($data);
        
        $this->sql = new self($db, $this->getTable());
        return $this;
    }
    
    public function verifyOnTable($table, $data = [], $obj, $post, $error = '')
    {
        
       // if($this->dbModel->save($table, $data)->current() == 1){
        if($this->dbManager->show($table, $data)->isBuffered())
            if($this->dbManager->show($table, $data)->count() == 1){
                $this->dbManager->save($table, $data);
                //return self::implementError();
                
            }
       // }
        
    }
    
    public function sqlCountTable($table, $data, $exists = NULL, $error = self::COUNT_ERROR)
    {
        $tableGateway = $this->dbManager->tableGateway($table);
        $verify       = $tableGateway->select($data);
        
        if($exists == NULL){
            $exists = 0;
        }
        
        if($verify->count() == $exists){
            return $tableGateway;
        }
        
        return $this;
        
    }
    
    public function update($data, $where = null)
    {  
        if(!is_array($data) || !is_array($where)){
            throw new \Exception('The string must be a array');
        }
        
        return $this->tableGateway->update($data, $where);
        
    }
    
    public function insert($data)
    {
        if(!is_array($data)){
            throw new \Exception('The string must be a array');
        }
        
        return $this->tableGateway->insert($data);
        
    }
    
    public function select($data)
    {
        if(!is_array($data)){
            throw new \Exception('The string must be a array');
        }
        
        return $this->tableGateway->select($data);
        
    }
    
    public function delete($data)
    {
        if(!is_array($data)){
            throw new \Exception('The string must be a array');
        }
        
        return $this->tableGateway->delete($data);
        
    }
    
    public function columns()
    {
        return $this->tableGateway->getColumns();
    }
    
    public function selectWith($select)
    {
        return $this->tableGateway->selectWith($select);
    }
    
    
}

