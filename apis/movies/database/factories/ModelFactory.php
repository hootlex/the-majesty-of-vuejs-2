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
    ['director' => 'Кристофер Нолан', 'title' => 'Темный рыцарь'],
    ['director' => 'Серджо Леоне', 'title' => 'Хороший, плохой, злой'],
    ['director' => 'Стивен Спилберг', 'title' => 'Спасти рядового Райана'],
    ['director' => 'Квентин Тарантино', 'title' => 'Криминальное чтиво'],
    ['director' => 'Альфред Хичкок', 'title' => 'Психо'],
    ['director' => 'Хаяо Миядзаки', 'title' => 'Унесённые призраками'],
    ['director' => 'Питер Джексон', 'title' => 'Властелин колец: Братство кольца'],
    ['director' => 'Джеймс Кэмерон', 'title' => 'Чужие'],
    ['director' => 'Альфонсо Куарон', 'title' => 'Гравитация'],
    ['director' => 'Фрэнк Дарабонт', 'title' => 'Побег из Шоушенка'],
    ['director' => 'Тимур Бекмамбетов', 'title' => 'Бен-Гур'],
    ['director' => 'Ховард Хоукс', 'title' => 'Глубокий сон'],
    ['director' => 'Мартин Скорсезе', 'title' => 'Волк с Уолл-стрит'],
    ['director' => 'Ричард Линклейтер', 'title' => 'Перед закатом'],
    ['director' => 'Энг Ли', 'title' => 'Жизнь Пи'],
    ['director' => 'Сидни Люмет', 'title' => '12 разгневанных мужчин'],
    ['director' => 'Ричард Маркуэнд', 'title' => 'Звёздные войны: Эпизод 6 – Возвращение Джедая'],
    ['director' => 'Пол Гринграсс', 'title' => 'Ультиматум Борна'],
    ['director' => 'Мэл Гибсон', 'title' => 'Храброе сердце'],
    ['director' => 'Клинт Иствуд', 'title' => 'Малышка на миллион'],
    ['director' => 'Роберт Земекис', 'title' => 'Назад в будущее 2'],
    ['director' => 'Брайан Де Пальма', 'title' => 'Лицо со шрамом'],
    ['director' => 'Лассе Халльстрём', 'title' => 'Что гложет Гилберта Грейпа?'],
    ['director' => 'Уильям Фридкин', 'title' => 'Изгоняющий дьявола'],
    ['director' => 'Дэвид Йейтс', 'title' => 'Гарри Поттер и Дары Смерти: Часть II'],
    ['director' => 'Билли Уайлдер', 'title' => 'В джазе только девушки'],
    ['director' => 'Стэнли Кубрик', 'title' => 'Заводной апельсин'],
    ['director' => 'Гай Ричи', 'title' => 'Большой куш'],
    ['director' => 'Милош Форман', 'title' => 'Пролетая над гнездом кукушки'],
    ['director' => 'Гор Вербински', 'title' => 'Пираты Карибского моря: Проклятие Черной жемчужины'],
    ['director' => 'Фрэнк Капра', 'title' => 'Эта замечательная жизнь'],
    ['director' => 'Эдгар Райт', 'title' => 'Зомби по имени Шон'],
    ['director' => 'Дэвид Финчер', 'title' => 'Бойцовский клуб'],
    ['director' => 'Френсис Лоуренс', 'title' => 'Голодные игры: И вспыхнет пламя'],
    ['director' => 'Джордж Лукас', 'title' => 'Американские граффити'],
    ['director' => 'Рон Клементс,', 'title' => 'Аладдин'],
    ['director' => 'Джон Маскер', 'title' => 'Аладдин'],
    ['director' => 'Дэнни Бойл', 'title' => 'Миллионер из трущоб'],
    ['director' => 'Джеймс Ван', 'title' => 'Пила'],
    ['director' => 'Брэд Бёрд', 'title' => 'Рататуй'],
    ['director' => 'Дени Вильнёв', 'title' => 'Пожары'],
    ['director' => 'Алехандро Аменабар', 'title' => 'Другие'],
    ['director' => 'Эндрю Стэнтон', 'title' => 'В поисках Немо'],
    ['director' => 'Дэвид Лин', 'title' => 'Лоуренс Аравийский'],
    ['director' => 'Уэс Андерсон', 'title' => 'Отель «Гранд Будапешт»'],
    ['director' => 'Акира Куросав', 'title' => 'Телохранитель'],
    ['director' => 'Джордж Рой Хилл', 'title' => 'Буч Кэссиди и Сандэнс Кид'],
    ['director' => 'Вуди Аллен', 'title' => 'Энни Холл'],
    ['director' => 'Джозеф Лео Манкевич', 'title' => 'Всё о Еве'],
    ['director' => 'Роман Полански', 'title' => 'Пианист']
];


$factory->define(App\Movie::class, function (Faker\Generator $faker) use ($greatMovies){
    $greatMovie = $faker->randomElement($greatMovies);
    return [
        'title' => $greatMovie['title'],
        'director' => $greatMovie['director']
    ];
});