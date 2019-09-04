<?php
namespace Lottobits\Lottery\Draws;

class Sweepstakes
{

    public function __construct()
    {}
    
    /**
     * 
     */
    public static function getDrawOutput()
    {
        //$award = json_encode(array($draw));
        for($i = 0; $i <= 5; $i++){
            $draw1 = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            $draw2 = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            $draw3 = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            $draw4 = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            $draw5 = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            
        }
        $results = array(
                1 => $draw1,
                2 => $draw2,
                3 => $draw3,
                4 => $draw4,
                5 => $draw5,
            );
        return json_encode($results);
    }
    
    /**
     * 
     */
    public static function execute()
    {
           $results = self::getDrawOutput();
                 
           
           echo $results;
        
        
        
    }
}

