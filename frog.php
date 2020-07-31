<?php
class Frog extends Animal{
public $name;
public $sound="hop hop";
public function __construct($name)
{
	$this->name=$name;
	}
	public function jump(){
		return "$this->sound";
}
}

?>