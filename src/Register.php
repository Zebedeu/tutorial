<?php



class Register {

	private $data = array();


	public function __construct(array $data){
		return $this->data[] = $data;
	}
}


$obj = new Register(['John'=> 'Doe']);
var_dump($obj);