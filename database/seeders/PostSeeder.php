<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

/**
 * PostSeeder calss created
 * @author FRANCESCO CIMINO
 */
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // posts creation;
        for ($i = 0; $i < 20; $i++){
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->description = $faker->text(200);
            $post->slug = Str::slug($post->title, "-"); //elimination of title's spaces;
            $post->save();
        }
    }
}
