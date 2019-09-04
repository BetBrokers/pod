<?php
namespace Lottobits\Database;

use PDO;
/**
 * Class DBConnection
 * @package Application\DBConnection
 */
class SqliteConnection
{
    /**
     * @var string
     */
    private $mySqlHost = "localhost";
    /**
     * @var string
     */
    private $mySqlDbname = "phplata-blockchain";
    /**
     * @var string
     */
    private $mySqlUsername = "root";
    /**
     * @var string
     */
    private $mySqlPassword = "epprqootWWGURpkhh!1";
    /**
     * @return \PDO
     */
    
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
    
    public function pdo() {
        $db = new \PDO('mysql:host='.$this->mySqlHost.';dbname='.$this->mySqlDbname,$this->mySqlUsername,$this->mySqlPassword);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    
    public function getSqliteConnection($database)
    {
        /*$db = Factory::fromArray([
            'sqlite:'.$this->getDatabase()[$database]
        ]);*/
        $db = new PDO('sqlite:'.$this->getDatabase()[$database]);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $db;
    }
    
}
?>
