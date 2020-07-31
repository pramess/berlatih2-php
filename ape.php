<?php
class Ape extends Animal{
public $name;
public $sound="Auoo";
public function __construct($name)
{
	$this->name=$name;
	}
public function yell(){
		return "$this->sound";
}
}

?>