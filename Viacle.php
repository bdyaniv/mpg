<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Viacle
 *
 * @author YBD
 */
class Viacle {
    
    private $id;
    protected $type; //car, truck, bike
    protected $make;
    protected $model;
    protected $year;
    protected $color;
    protected $wheels;
    
    function __construct($type="car", $make="undef", $model="undef", $year=1990, $color="undef", $wheels=4) {
	$this->type = $type;
	$this->make = $make;
	$this->model = $model;
	$this->year = $year;
	$this->color = $color;
	$this->wheels = $wheels;
    }
	
    function show() {
	echo "Make: " . $this->make . "<br />";
	echo "Model: " . $this->model . "<br />";
	echo "Year: " . $this->year . "<br />";
	echo "Color: " . $this->color . "<br />";
	echo "Wheels: " . $this->wheels . "<br />";
    }
	
    function getType() {
	return $this->_type;
    }
}

?>
