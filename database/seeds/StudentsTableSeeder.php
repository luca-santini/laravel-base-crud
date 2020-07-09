<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < ; $i++) {
            $new_student = new Student();
            $new_student->name = $faker->name;
            $new_student->surname = $faker->name;
            $new_student->email = $faker->unique()->safeEmail;
            $new_student->save();

        }
    }
}
