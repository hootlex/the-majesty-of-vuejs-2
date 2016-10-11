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
$starwars = [
    [
        "plot" => "When 900 years old, you reach… Look as good, you will not.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "The Dark Side of the Force is the pathway to many abilities some consider to be… Unnatural.",
        "writer" => "Senator Palpatine"
    ],
    [
        "plot" => "You don’t know how hard I found it, signing the order to terminate your life",
        "writer" => "Governor ‘Grand Moff’ Tarkin"
    ],
    [
        "plot" => "He’s holding a thermal detonator!",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "I sense great fear in you, Skywalker. You have hate… you have anger… but you don’t use them.",
        "writer" => "Count Dooku"
    ],
    [
        "plot" => "Great, kid. Don’t get cocky",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "Luke, you can destroy the Emperor. He has foreseen this. It is your destiny. Join me, and together we can rule the galaxy as father and son.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "You can’t win, Darth. Strike me down, and I will become more powerful than you could possibly imagine.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "It's a trap!",
        "writer" => "Admiral Ackbar"
    ],
    [
        "plot" => "Aren't you a little short for a storm trooper?",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Why you stuck-up, half-witted, scruffy-looking nerf-herder!",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Mmm. Lost a planet, Master Obi-Wan has. How embarrassing.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "Lando’s not a system he’s a man!",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "These aren’t the droids you’re looking for...",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "Traveling through hyperspace ain't like dusting crops, farm boy.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "If there's a bright centre to the universe, you're on the planet that it's farthest from.",
        "writer" => "Luke Skywalker"
    ],
    [
        "plot" => "Fear is the path to the dark side.",
        "writer" => " Yoda"
    ],
    [
        "plot" => "Don't call me a mindless philosopher, you overweight glob of grease.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Anakin, you’re breaking my heart! And you’re going down a path I cannot follow!",
        "writer" => "Padme"
    ],
    [
        "plot" => "Master Kenobi, you disappoint me. Yoda holds you in such high esteem. Surely you can do better!",
        "writer" => "Count Dooku"
    ],
    [
        "plot" => "You were the chosen one! It was said that you would destroy the Sith, not join them.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "At last we will reveal ourselves to the Jedi. At last we will have revenge.",
        "writer" => "Darth Maul"
    ],
    [
        "plot" => "I’ve been waiting for you, Obi-Wan. We meet again, at last. The circle is now complete. When I left you, I was but the learner; now I am the master.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "Now, young Skywalker… you will die.",
        "writer" => "The Emperor"
    ],
    [
        "plot" => "I find your lack of faith disturbing.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "The Force is strong with you. A powerful Sith you will become. Henceforth, you shall be known as Darth… Vader.",
        "writer" => " Darth Sidious"
    ],
    [
        "plot" => "There's always a bigger fish.",
        "writer" => "Qui-Gon Jinn"
    ],
    [
        "plot" => "Hello. I don't believe we have been introduced. R2-D2? A pleasure to meet you. I am C-3PO, Human-Cyborg Relations.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Ahh, hard to see, the Dark Side is.",
        "writer" => "Yoda"
    ],
    [
        "plot" => "Good Anakin. Good. Kill him. Kill him now.",
        "writer" => "Chancellor Palpatine"
    ],
    [
        "plot" => "General Grievous, you're shorter than I expected.",
        "writer" => " Anakin Skywalker"
    ],
    [
        "plot" => "Don't get technical with me. What mission? What are you talking about? I've just about had enough of you. Go that way, you'll be malfunctioning in a day you near-sighted scrap pile.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "Help me Obi-Wan Kenobi, you're my only hope.",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Obi-Wan Kenobi. Obi-Wan. Now that's a name I have not heard in a long time. A long time.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "You came in that thing? You're braver than I thought.",
        "writer" => "Princess Leia"
    ],
    [
        "plot" => "Laugh it up, Fuzz ball.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "Sir, the possibility of successfully navigating an asteroid field is approximately 3,720 to 1.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "No. I am your Father.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "I'm rather embarrassed, General Solo, but it appears that you are to be the main course at a banquet in my honour.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "Obi-Wan has taught you well.",
        "writer" => " Darth Vader"
    ],
    [
        "plot" => "Oh my. Space travel sound rather perilous. I can assure you they will never get me on one of those dreadful Star Ships.",
        "writer" => " C-3PO"
    ],
    [
        "plot" => "One thing's for sure, we're all going to be a lot thinner.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "The force is strong with this one.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "Great shot kid, that was one in a million.",
        "writer" => "Han Solo"
    ],
    [
        "plot" => "I suggest a new strategy, R2: let the Wookiee win.",
        "writer" => "C-3PO"
    ],
    [
        "plot" => "Remember...the Force will be with you, always.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "There is good in him. I've felt it.",
        "writer" => "Luke Skywalker"
    ],
    [
        "plot" => "You may dispense with the pleasantries, Commander. I am here to put you back on schedule.",
        "writer" => "Darth Vader"
    ],
    [
        "plot" => "Luke, I don't want to lose you to the Emperor the way I lost Vader.",
        "writer" => "Obi Wan Kenobi"
    ],
    [
        "plot" => "Death is a natural part of life. Rejoice for those around you who transform into the Force.",
        "writer" => "Yoda"
    ]
];


$factory->define(App\Story::class, function (Faker\Generator $faker) use ($starwars){
    $swStory = $faker->randomElement($starwars);
    return [
        'plot' => $swStory['plot'],
        'writer' => $swStory['writer'],
        'upvotes' => $faker->numberBetween(0, 900)
    ];
});