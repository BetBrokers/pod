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
namespace Manager\Api;

use Manager\Db\Sql\Sql;

class Model
{
    
    //private $adapter;
    
    /*
     * Define of configuration to database connected 
     */
    public function __construct($data)
    {   
        $this->data      = new Sql($data);
        //$this->tableGateway = new TableGateway($table, $this->getAdapter());
        return $this;
    }
    
    /*
     * Get the information data on database to list
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
        
        return (object)$result;
        
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

