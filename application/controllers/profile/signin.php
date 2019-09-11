<?php

use Lottobits\Profile\Generate;
use Lottobits\Profile\Decrypt;
use Lottobits\Application\Model\Profile\Profile;
use Lottobits\Application\Model\Profile\ProfileModel;

/* $content = array(
	"title" => $settings["name"],
	"contact" => true,
	"pagecss" => "contact",
);

$content = array_merge($content,$settings);
echo $m->render("pages/contact", $content); */

$key = 'eNrSU8EuXXGYbuGT5Jqw2qHq1h12f8HRYJIg9Om5aHurXt+etNfopEaPLqzOht48kAkKGyHeuJMC+6n1PZEQb7ELD+pcjm71pGZnKXNwX3H7B\/ZiQdI8AlY8bq8RDAjx\/IsmTPGsBazYWqbo6cEIoNcbEqWm8psSqNxPZsN2nClxL40GTSsBhKKwlURjqSKXIEM8h8u1PrSxdI0tWci+T0BpsGeBGyZN\/YzDOnKJhk1J9rWFgau+4uNLcZVLttv48cXx7i3AH0hrE7foACEFdhiJD2iDW5FjVCwhwrQKhZQ=';
$password = 'teste';
$profile = new ProfileModel($key, $password);
var_dump($profile->decrypt->mapper->getNickname());