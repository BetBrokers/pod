<?php
namespace Lottobits\Application\Model\Games\Lottery;

use Lottobits\Database\SqliteConnection;
use PDOStatement;

class ResultsModel extends SqliteConnection
{

    /**
     * 
     */
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->lottery = $this->getSqliteConnection('games/lottery');
    }
    
    /**
     * 
     * @param string $datetime
     * @return PDOStatement
     */
    public function getExtractionResultsByDateTime(string $datetime)
    {
        $results = $this->lottery->query("SELECT * FROM results WHERE day = '$datetime'");
        
        return $results;
    }
    
    /**
     * 
     */
    public function getLatestRewardDeposits()
    {
        $results = $this->lottery->query("SELECT * FROM results WHERE day = '$datetime'");
        
        return $results;
    }
}

