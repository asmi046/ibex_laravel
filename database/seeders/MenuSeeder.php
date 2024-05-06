<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("menus")->insert(
            [
                [
                    'lnk' => "/".Str::slug("Навесные объемные фасады"),
                    'order' => 1,
                    'enabled' => 1,
                    'title' => "Навесные объемные фасады",
                ],
                [
                    'lnk' => "/services",
                    'order' => 2,
                    'enabled' => 1,
                    'title' => "Услуги",
                ],

                [
                    'lnk' => "/bim-biblioteka",
                    'order' => 3,
                    'enabled' => 0,
                    'title' => "Bim библиотека",
                ],

                [
                    'lnk' => "/technical-documentation",
                    'order' => 5,
                    'enabled' => 1,
                    'title' => "Техническая документация",
                ],

                [
                    'lnk' => "/price-list",
                    'order' => 6,
                    'enabled' => 0,
                    'title' => "Прайс-лист",
                ],

                [
                    'lnk' => "/contacts",
                    'enabled' => 1,
                    'order' => 7,
                    'title' => "Контакты",
                ],

            ]);


    }
}
