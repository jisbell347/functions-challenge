<?php
/**
 * @params
 * @return
 **/
// Math Dhallenge in PHP

//Takes two random numbers between 1-6 and adds them together then returns the sum;
function diceRoll() {
	$dice = rand(1,6) + rand(1,6);
	return "You rolled a $dice!";
};

echo diceRoll();

// String Challenge in PHP
function animals($animalName) {
	if($animalName === "Rabbit")
		return "$animalName is written ウサギ in Japanese.";
	elseif($animalName === "Horse")
		return "$animalName is written 馬 in Japanese.";
	elseif($animalName === "Cat")
		return "$animalName is written 猫 in Japanese.";
	else
		return "Your choice is highly illogical";
};

echo animals("Rabbit");

// Array Challenge in PHP
function shows() {
	$dylansShows = array('Star Trek', 'Star Wars', 'Office Space', 'Simpsons');
	$showsToWatch = array();
	$moviesToAvoid = array();

	for($x = 0; $x < count($dylansShows); $x++) {
		if(in_array("Star Wars", $dylansShows)) {
			array_push($moviesToAvoid, $dylansShows[$x]);
		} else {
			array_push($showsToWatch, $dylansShows[$x]);
		}
	}
	var_dump(implode($moviesToAvoid, " Should avoid: "));
	var_dump(implode($showsToWatch, "Should watch: "));
};

shows();