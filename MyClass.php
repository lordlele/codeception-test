<?php

class MyClass 
{
	public function startApplication()
	{
		$alfa = 1;
		$beta = 2;
		$string = "Hello World";
		echo $string;

		echo $this->doSomething();
	}

	public function doSomething()
	{
		$result = "";
		for ($i = 1; $i <= 10; $i++) {
			$result.= ".";
		}
		return $result;
	}

	public function doAnotherThing()
	{
		$result = "";
		for ($i = 1; $i <= 10; $i++) {
			$result.= "*";
		}
		return $result;
	}
	
}