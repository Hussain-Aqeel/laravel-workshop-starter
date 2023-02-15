<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 1,
                    'recipe_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 3,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 1,
                    'recipe_id' => 4,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 3,
                    'recipe_id' => 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 8,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 2,
                    'recipe_id' => 9,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
                    'user_id' => 1,
                    'recipe_id' => 10,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
