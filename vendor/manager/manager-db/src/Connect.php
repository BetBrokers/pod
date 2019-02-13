<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
/**
 * Available options from database to all model
 *
 */
namespace Manager\Db;

use Manager\Db\Sql\Sql;

class Connect
{
    
    /*
     * Define of configuration to database connected 
     */
    public function __construct($data)
    {   
        if(!is_array($data)){
            throw new \ErrorException();
        }
        $this->data = new Sql($data);
        //$this->tableGateway = new TableGateway($table, $this->getAdapter());
        return $this->data;
    }
    
    /*
     * Get the information data on database to list
     * @return array
     */
    public function get(array $data)
    {
        if(!is_array($data)){
            throw new \Exception();
        }
        $result = array(null);
        
        $this->result = $this->data->select($data);
        if($this->result->count() > 0){
            $result = $this->result->toArray();
        }
        
        return $result;
        
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

