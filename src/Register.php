<?php



class Register {

	private $data = array();


	public function __construct(array $data = null ){
		return $this->data[] = $data;
	}

	public function __get($name) {
		if(array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
	}

	public function __set($name, $value) {
		return $this->data[$name] = $value;
	}
}


$obj = new Register();
var_dump($ob->nome = "olaa");