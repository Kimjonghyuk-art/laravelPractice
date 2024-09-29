<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker; // 수동 입력
//php artisan make:seeder PostSeeder로 실행
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //단일 값 insert
        // DB::table('posts')->insert([
        //     'user_id' => 1,
        //     'subject' => '씨더 제목2',
        //     'content' => '본문2',
        // ]);
        //https://fakerphp.github.io
        //Formatters
        $faker = Faker::create();
        foreach(range(1,10) as $index)
        {
            DB::table('posts')->insert([
                'subject' => $faker->sentence(5), // 단어로
                'content' => $faker->paragraph(4),// 문장 긴 절
                'email' => $faker->email(),
            ]);
        }

    }
}
