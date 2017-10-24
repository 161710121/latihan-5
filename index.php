<?php
class pengulangan
{
	public $bil1, $bil2;

	public function __construct ($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function bilpen()
	{
		for ($i=0; $i <11 ; $i++) { 
			echo $this->bil1."<br>";
			echo $this->bil2."<br>";
		}
	}
}
?>