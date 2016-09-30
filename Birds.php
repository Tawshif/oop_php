<?php 

/**
* Person class
*
* public
*
* protected
*
**/

class Birds
{
	public $canFly;
	private $legCount;

	public function __construct($canFly , $legCount)
	{
		$this->canFly = $canFly;
		$this->legCount = $legCount;
	}

	public function canFly()
	{
		return $this->canFly;
	}

	public function getLegCount()
	{
		return $this->legCount;
	}
}