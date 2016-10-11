<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$greatMovies = [
    ["director" => "Christopher Nolan", "title" => "The Dark Knight"],
    ["director" => "Sergio Leone", "title" => "The Good, the Bad and the Ugly"],
    ["director" => "Steven Spielberg", "title" => "Saving Private Ryan"],
    ["director" => "Quentin Tarantino", "title" => "Pulp Fiction"],
    ["director" => "Alfred Hitchcock", "title" => "Psycho"],
    ["director" => "Hayao Miyazaki", "title" => "Spirited Away"],
    ["director" => "Peter Jackson", "title" => "The Lord of the Rings: The Fellowship of the Ring"],
    ["director" => "James Cameron", "title" => "Aliens"],
    ["director" => "Alfonso Cuarón", "title" => "Gravity"],
    ["director" => "Frank Darabont", "title" => "The Shawshank Redemption"],
    ["director" => "William Wyler", "title" => "Ben-Hur"],
    ["director" => "Howard Hawks", "title" => "The Big Sleep"],
    ["director" => "Martin Scorsese", "title" => "The Wolf of Wall Street"],
    ["director" => "Richard Linklater", "title" => "Before Sunset"],
    ["director" => "Ang Lee", "title" => "Life of Pi"],
    ["director" => "Sidney Lumet", "title" => "12 Angry Men"],
    ["director" => "George Lucas", "title" => "Star Wars: Episode VI - Return of the Jedi"],
    ["director" => "Paul Greengrass", "title" => "The Bourne Ultimatum"],
    ["director" => "Mel Gibson", "title" => "Braveheart"],
    ["director" => "Clint Eastwood", "title" => "Million Dollar Baby"],
    ["director" => "Robert Zemeckis", "title" => "Back to the Future Part II"],
    ["director" => "Brian De Palma", "title" => "Scarface"],
    ["director" => "Lasse Hallström", "title" => "What's Eating Gilbert Grape"],
    ["director" => "William Friedkin", "title" => "The Exorcist"],
    ["director" => "David Yates", "title" => "Harry Potter and the Deathly Hallows: Part 2"],
    ["director" => "Billy Wilder", "title" => "Some Like It Hot"],
    ["director" => "Stanley Kubrick", "title" => "A Clockwork Orange"],
    ["director" => "Guy Ritchie", "title" => "Snatch."],
    ["director" => "Milos Forman", "title" => "One Flew Over the Cuckoo's Nest"],
    ["director" => "Gore Verbinski", "title" => "Pirates of the Caribbean: The Curse of the Black Pearl"],
    ["director" => "Frank Capra", "title" => "It's a Wonderful Life"],
    ["director" => "Edgar Wright", "title" => "Shaun of the Dead"],
    ["director" => "David Fincher", "title" => "Fight Club"],
    ["director" => "Francis Lawrence", "title" => "The Hunger Games: Catching Fire"],
    ["director" => "Ron Howard", "title" => "American Graffiti"],
    ["director" => "Ron Clements", "title" => "Aladdin"],
    ["director" => "John Musker", "title" => "Aladdin"],
    ["director" => "Danny Boyle", "title" => "Slumdog Millionaire"],
    ["director" => "James Wan", "title" => "Saw"],
    ["director" => "Brad Bird", "title" => "Ratatouille"],
    ["director" => "Denis Villeneuve", "title" => "Incendies"],
    ["director" => "Alejandro Amenábar", "title" => "The Others"],
    ["director" => "Andrew Stanton", "title" => "Finding Nemo"],
    ["director" => "David Lean", "title" => "Lawrence of Arabia"],
    ["director" => "Wes Anderson", "title" => "The Grand Budapest Hotel"],
    ["director" => "Akira Kurosawa", "title" => "Yojimbo"],
    ["director" => "George Roy Hill", "title" => "Butch Cassidy and the Sundance Kid"],
    ["director" => "Woody Allen", "title" => "Annie Hall"],
    ["director" => "Joseph L. Mankiewicz", "title" => "All About Eve"],
    ["director" => "Roman Polanski", "title" => "The Pianist"]
];


$factory->define(App\Movie::class, function (Faker\Generator $faker) use ($greatMovies){
    $greatMovie = $faker->randomElement($greatMovies);
    return [
        'title' => $greatMovie['title'],
        'director' => $greatMovie['director']
    ];
});