<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->realText(50);
            // $project->cover_image = 'placeholders/' . $faker->image('public/storage/placeholders', category: 'Projects', fullPath: false);
            $project->cover_image = $faker->imageUrl(360, 360, 'project', true);
            $project->slug = Str::slug($project->title, '-');
            $project->description = $faker->realText();
            $project->save();

            # code...
        }
    }
}
