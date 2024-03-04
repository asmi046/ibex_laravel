<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("banner/main_bg.webp", file_get_contents(public_path('img/main_bg.webp')), 'public');

        DB::table("pages")->insert(
            [
                [
                    'title' => 'Bim библиотека',
                    'slug' => Str::slug("Bim библиотека"),
                    'img' => Storage::url("banner/main_bg.webp"),
                    'description' => file_get_contents(public_path('pages//bim.html')),
                    'seo_title' => 'Bim библиотека',
                    'seo_description' => 'Bim библиотека',
                ],
                [
                    'title' => 'Контакты',
                    'slug' => Str::slug("Контакты"),
                    'img' => Storage::url("banner/main_bg.webp"),
                    'description' => '',
                    'seo_title' => 'Контакты',
                    'seo_description' => 'Контакты',
                ],
                [
                    'title' => 'Калькулятор',
                    'slug' => Str::slug("Калькулятор"),
                    'img' => Storage::url("banner/main_bg.webp"),
                    'description' => '',
                    'seo_title' => 'Калькулятор',
                    'seo_description' => 'Калькулятор',
                ]
            ]);

    }
}
