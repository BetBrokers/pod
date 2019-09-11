<?php
namespace Lottobits\Application\Model\Install;

use Lottobits\Database\SqliteConnection;
use PDOException;

class Lottery extends SqliteConnection
{

    private $tickets;
    
    private $results;
    
    private $withdrawals;
    
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->lottery = $this->getSqliteConnection('games/lottery');
        
    }
    
    /**
     * 
     */
    public function tickets()
    {
        try{
            $this->tickets = "CREATE TABLE tickets (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                ticket INTEGER,
                hash_tx  VARCHAR,
                price VARCHAR,
                bitcoin_address VARCHAR
            )";
            
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     *
     */
    public function results()
    {
        try{
            $this->results = "CREATE TABLE results (
                id INTEGER PRIMARY KEY,
                draw TEXT,
                day DATETIME              
                )";
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     *
     */
    public function winners()
    {
        try{
            $this->results = "CREATE TABLE results (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                ticket VARCHAR,
                hash_tx VARCHAR,
                bitcoin_address,
                day DATETIME
                )";
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     *
     */
    public function withdrawals()
    {
        try{
            $this->results = "CREATE TABLE withdrawals (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                hash_tx VARCHAR,
                value VARCHAR,
                bitcoin_address,
                day DATETIME
                )";
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     * 
     */
    public static function create()
    {
        $create = new self;
        $create->tickets()->results()->with;
        
        $create->lottery->exec($create->tickets);
        $create->lottery->exec($create->results);
        $create->lottery->exec($create->withdrawals);
    }
    
    
}

