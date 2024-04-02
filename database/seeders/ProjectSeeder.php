<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project;
            $project->name = $faker->word();
            $project->date = $faker->dateTime();
            $project->description = $faker->paragraph();
            $project->image = $faker->imageUrl(640, 480, 'poster', true);
            $project->save();
        }
    }
}
