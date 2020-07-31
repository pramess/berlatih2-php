<?php
class Animal
{
public $legs=2;
public $cold;
public $name;
public function __construct($name)
{
	$this->name=$name;
	}

	public function cold_blooded(){
		if($this->legs==4){
				return TRUE;
				
		}else{
			return FALSE;

		}
	}
	

}

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>


