<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    public function getData(): array 
    {
        $faker = Factory::create();
        $data = [];

        for($i=0; $i<50; $i++) {
            $data[] = [
                'category_id' => 1, 
                'title' => $faker->sentence(mt_rand(3, 10)),
                'description' => $faker->text(150),
                'created_at' => now(),
                'updated_at' => now() 
            ];
        }
        return $data;
    }
}
