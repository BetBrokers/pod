<?php
namespace PHPlata\Database;



/**
 *
 * @author Lenovo
 *        
 */
class Dao
{
    
    public $database;
    
    
    public function getData(array $data)
    {
        
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'database':
                        $this->setDatabase($value);
                        break;
                    
                }
            }
        }
    }
    
    /**
     *
     * @param string $database
     * @return \PHPlata\Blockchain\BlockHeader
     */
    public function setDatabase($database)
    {
        $this->database = $database;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getDatabase()
    {
        return $this->database;
    }
    
}

