<?php
namespace Manager\Db\Sql;

abstract class AbstractSql
{
    
    public $path;
    
    public $table;
    
    
    public function getData($data = [])
    {
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'path':
                        $this->setPath($value);
                        break;
                    case 'table':
                        $this->setTable($value);
                        break;
                    
                }
            }
        }
    }
    
   
    
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    
    public function getPath()
    {
        return $this->path;
    }
    
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }
    
    public function getTable()
    {
        return $this->table;
    }
    
}

