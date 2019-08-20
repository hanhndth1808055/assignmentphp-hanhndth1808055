<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(\App\Applicants::class, function (Faker $faker) {
    return [
        "name" => $faker->unique()->name,
        "tel" => $faker->phoneNumber,
        "birthday" => $faker->dateTimeBetween("1970-01-01", "1994-12-31")->format('Y-m-d'),
        "gender" => $faker->randomFloat(0, 0, 1),
        "department_id" => $faker->randomFloat(0, 1, 5),
        "position_id" => $faker->randomFloat(0, 1, 7),
        "certification_id" => $faker->randomFloat(0, 1, 15),
        "strength" => $faker->sentence,
        "applying_date" => $faker->dateTimeThisDecade-> format('Y-m-d')
    ];
});

$factory->define(\App\Certification::class, function (Faker $faker) {
    return [
        "name" => $faker->randomElement(array("Bachelor", "Master of Arts", "Master of Science", "High School")),
        "major" => $faker->randomElement(array("IT", "English", "Chinese", "Telecommunication", "Design", "Economics", "Laws", "Administration")),
    ];
});

$factory->define(\App\ChangeRecords::class, function (Faker $faker) {
    return [
        "staff_id" => $faker->randomFloat(0, 1, 100),
        "change_type" => $faker->randomElement(array("Change position", "Change deparment", "Change salary", "New contract")),
        "content" => $faker->sentence
    ];
});

$factory->define(\App\Departments::class, function (Faker $faker) {
    return [
        "name" => $faker->unique()->randomElement(array("IT", "General", "Economics", "Administration", "Library")),
        "address" => $faker->address,
        "tel" => $faker->phoneNumber
    ];
});

$factory->define(\App\Positions::class, function (Faker $faker) {
    return [
        "name" => $faker->unique()->randomElement(array("Professor", "Lecturer", "Vice Manager", "Manager", "Director", "Staff", "Clerk"))
    ];
});

$factory->define(\App\Salary::class, function (Faker $faker) {
    return [
        "salary_grade" => $faker->randomElement(array("A1", "A2", "A3", "A4", "A5", "A6")),
        "base_salary" => $faker->randomElement(array(3000000)),
        "salary_range" => $faker->randomFloat(1, 3, 6),
        "allowance_range" => $faker->randomFloat(1, 0.5, 3)
    ];
});

$factory->define(\App\Staffs::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "tel" => $faker->phoneNumber,
        "birthday" => $faker->dateTimeBetween("1970-01-01", "1994-12-31")->format('Y-m-d'),
        "gender" => $faker->randomFloat(0, 0, 1),
        "department_id" => $faker->randomFloat(0, 1, 5),
        "position_id" => $faker->randomFloat(0, 1, 7),
        "certification_id" => $faker->randomFloat(0, 1, 15),
        "salary_id" => $faker->randomFloat(0, 1, 10),
        "strength" => $faker->sentence,
        "enrollment_date" => $faker->dateTimeBetween('-7 years', 'now')->format('Y-m-d')
    ];
});
