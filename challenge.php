<?php

// Math Challenge in PHP
/**
 * Takes two random numbers between 1-6 and adds them together then returns the sum;
 *
 * @params int $dice a random number chosen by the computer between 1 and 6
 * @return int sum of two random numbers
 **/
function diceRoll() {
	$dice = rand(1,6) + rand(1,6);
	return "You rolled a $dice!";
};

echo diceRoll();

// String Challenge in PHP
/**
 * Takes a parameter and checks if it equals any of the set strings and returns the output. If not, returns a default response
 *
 * @params string $animalName a string of an animal name
 * @return string returns a preset string if the parameter matches the input string. Else, gives default response.
 *
 **/
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

echo animals("Cat");

// Array Challenge in PHP
/**
 * Takes a parameter and checks if it equals any of the set strings and returns the output. If not, returns a default response
 *
 * @params string $animalName a string of an animal name
 * @return string returns a preset string if the parameter matches the input string. Else, gives default response.
 *
 **/
function shows() {
	$dylansShows = array('Star Trek', 'Star Wars', 'Office Space', 'Simpsons');
	$showsToWatch = array();
	$moviesToAvoid = array();

	for($x = 0; $x < count($dylansShows); $x++) {
		if($dylansShows[$x] === "Star Wars") {
			$moviesToAvoid[] = $dylansShows[$x];
		} else {
			$showsToWatch[] = $dylansShows[$x];
		}
	}
	$avoid = implode(',', $moviesToAvoid);
	$watch = implode(' ,', $showsToWatch);

	return "The shows to avoid are" . $avoid . "and the shows to watch are " . $watch;
};

echo shows();