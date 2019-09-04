<?php

use Lottobits\Lottery\Reward\Awards;

$award = new Awards('{"1":"1245","2":"6062","3":"2433","4":"7210","5":"0503"}');
echo $award->getAwardThousands('6062');