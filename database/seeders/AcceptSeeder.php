<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AcceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->put("banner/main_bg.webp", file_get_contents(public_path('img/main_bg.webp')), 'public');

        // soglasie-na-obrabotku-personalnyx-dannyx

        DB::table("pages")->insert(
            [
                [
                    'title' => 'Согласие на обработку персональных данных',
                    'slug' => Str::slug("Согласие на обработку персональных данных"),
                    'img' => "banner/main_bg.webp",
                    'description' => file_get_contents(public_path('pages//accept.html')),
                    'seo_title' => 'Согласие на обработку персональных данных',
                    'seo_description' => 'Согласие на обработку персональных данных',
                ],
            ]);

    }
}
