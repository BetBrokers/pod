<?php
namespace Lottobits\Application\Model\Games\RollDice;

use Lottobits\Database\SqliteConnection;

class BetsModel extends SqliteConnection
{

    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->rollDice = $this->getSqliteConnection('games/roll-dice');
        $this->mapper = new BetsMapper();
    }
    
    /**
     *
     * @param array $data
     */
    public function addRoll(array $data)
    {
        $this->mapper->getData($data);
        
        $play = "INSERT INTO bets (id, nickname, number, profit, results)
             VALUES (NULL, '".$this->mapper->getNickname()."', '".$this->mapper->getNumber()."', '".$this->mapper->getProfit()."', '".$this->mapper->getResults()."')";
        
        $this->rollDice->exec($play);
    }
    
    public function getBets()
    {
        $bets = $this->rollDice->query("SELECT * FROM bets");
        return $bets;
    }
}

