<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
                    'lnk' => "/products",
                    'order' => 1,
                    'title' => "Продукция",
                ],
                [
                    'lnk' => "/services",
                    'order' => 2,
                    'title' => "Услуги",
                ],

                [
                    'lnk' => "/bim-biblioteka",
                    'order' => 3,
                    'title' => "Bim библиотека",
                ],

                [
                    'lnk' => "/kalkuliator",
                    'order' => 4,
                    'title' => "Калькулятор",
                ],

                [
                    'lnk' => "/technical-documentation",
                    'order' => 5,
                    'title' => "Техдокументация",
                ],

                [
                    'lnk' => "/price-list",
                    'order' => 6,
                    'title' => "Прайс-лист",
                ],

                [
                    'lnk' => "/kontakty",
                    'order' => 7,
                    'title' => "Контакты",
                ],

            ]);


    }
}
