<?php

use Lottobits\Profile\Generate;
use Lottobits\Profile\Decrypt;
use Lottobits\Application\Model\Profile\Profile;

/* $content = array(
	"title" => $settings["name"],
	"contact" => true,
	"pagecss" => "contact",
);

$content = array_merge($content,$settings);
echo $m->render("pages/contact", $content); */

$key = 'EHbY/IpEKoL3IYuzvVwXHbRF/h3LRlazg2gH44ApIJSRwe6tjYm0Vqcm3X6LdNCDLYZn+MR/xnrsuanWU5v2nANBy6OVTbe3JBCSauA+KxAmC+rLh5+bzXrSCXIu3xPxpMFYP59Y2kUsmboJ2+5sHQ==';
$password = 'testando';
$profile = new Profile($key, $password);
var_dump($profile->decrypt->mapper->getBitcoinAddress(0));