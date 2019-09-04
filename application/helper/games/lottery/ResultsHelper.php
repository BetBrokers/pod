<?php
namespace Lottobits\Application\Helper\Games\Lottery;

use Lottobits\Application\Model\Games\Lottery\ResultsModel;

class ResultsHelper
{

    public function __construct()
    {
        $this->results = new ResultsModel();
    }
    
    /**
     * 
     */
    public function show()
    {
        if(isset($_GET['datetime'])){
            $results = $this->results->getExtractionResultsByDateTime($_GET['datetime']);
        
            foreach($results as $key){
                $draw = json_decode($key['draw'], true);
                for($i = 1; count($draw); $i++){
                    return var_dump($draw[$i]);
                }
            }
        }
        
    }
}

