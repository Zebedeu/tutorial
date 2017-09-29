<?php



class Register {

	private $data = array();


	public function __construct(array $data){
		return $this->data[] = $data;
	}

	public function __get($name) {
		if(array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
	}
}


$obj = new Register(['John'=> 'Doe']);
var_dump($obj);