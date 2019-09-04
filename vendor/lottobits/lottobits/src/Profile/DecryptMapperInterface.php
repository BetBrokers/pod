<?php
namespace Lottobits\Profile;


interface DecryptMapperInterface
{
    
    public function getData(array $data);

    public function setBitcoinAddress($bitcoinAddress);
    
    public function getBitcoinAddress();
    
}

