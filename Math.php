<?php
/**
 * this class simply does some simple math operations for a demo
 * 
 * @author Anik
 * @copyright 2016
 * @license path/to/licens.txt GPL
 */

class Math {
  	
  	/**
  	 * Add as many arguments (INTs)as you wish and this method will calculate the sum.
  	 * @return int this will return intigers
  	 */
  	function add()	{
  		$args = func_num_args();
  		$sum = 0;
  		$i = 0;

  		for ($i; $i < $args; $i++) { 
  			is_int(func_get_arg($i)) ? $sum += func_get_arg($i) : die('user only integerts, please.');
  		}
  		return $sum;
  	}	

}
