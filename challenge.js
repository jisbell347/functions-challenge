
// Math Challenge for JavaScript

//takes two numbers at random between 0-10, adds them together and returns the result
function diceRoll(number1, number2) {
	dice = Math.floor((Math.random(number1)*6) + (Math.random(number2)*6));
	return `You roll the dice and get a ${dice}!`;
}

console.log(diceRoll());

// String Challenge for Javascript

let animalName = "dog"
//Takes animalName from the global scope and inserts it into the parameter of the favoriteAnimal function
const favoriteAnimal = (animal) => {

	//returns a different string depending on the animalName passed into the function
	if(animal.toLowerCase() === 'cat') {
		return `In Japanese, ${animal}s say "にゃ"!`;
	} else if(animal.toLowerCase() === 'dog') {
		return `In Japanese, ${animal}s say "わん”!`;
	} else if(animal.toLowerCase() === 'panda') {
		return `Um,....Not really sure what ${animal}s say.`;
	} else if(animal.toLowerCase() === 'monkey') {
		return `${animal}s go きき in Japanese.`
	} else {
		return `Your choice is highly illogical`;
	}
};

//Logs the result of running the favoriteAnimal function to the console.
console.log(favoriteAnimal(animalName));

//Array challenge for JavaScript
const dylansShows = ['Star Trek', 'Office Space', 'Star Wars', 'The Simpsons'];
const dylansFavorites = [];
const moviesNotWorthSeeing = [];
// Loops through each item in the dylansShows array and pushes it into either the dylansFavorites or moviesNotWorthSeeing array depending on if the string "Wars" is present.
function shows() {
	for(let i = 0; i < dylansShows.length; i++) {
		if(dylansShows[i].includes('Wars')) {
			moviesNotWorthSeeing.push(dylansShows[i]);
		} else {
			dylansFavorites.push(dylansShows[i]);
		}
	}
	return `Some really cool shows to watch are: ${dylansFavorites.join(', ')}. Movies you want to avoid at all costs are: ${moviesNotWorthSeeing.join(', ')}.`;
}

console.log(shows());

