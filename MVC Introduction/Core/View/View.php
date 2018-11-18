<?php

namespace Core\View;

use \Core\View\ViewInterface;

class View implements ViewInterface
{
	private $controller_name;
	private $action_name;

	public function __construct(string $controller_name, string $action_name){
		$this->controller_name = $controller_name;
		$this->action_name = $action_name;
	}

	public function render(){
		include($_SERVER['DOCUMENT_ROOT'] . '/View/'.$this->controller_name . '/' . $this->action_name.'.php');
	}
}
?>