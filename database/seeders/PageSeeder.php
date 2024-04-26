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
                    'title' => 'Политика конфиденциальности',
                    'slug' => Str::slug("Политика конфиденциальности"),
                    'img' => Storage::url("banner/main_bg.webp"),
                    'description' => file_get_contents(public_path('pages//policy.html')),
                    'seo_title' => 'Политика конфиденциальности',
                    'seo_description' => 'Политика конфиденциальности',
                ],
            ]);

    }
}
