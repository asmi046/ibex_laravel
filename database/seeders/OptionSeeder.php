<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("options")->insert(
            [
                [
                    "name" => "phone",
                    "type" => "plan",
                    'title' => 'Телефон',
                    "value" => "8 800 000 00 00",
                ],
                [
                    "name" => "phone2",
                    "type" => "plan",
                    'title' => 'Телефон дополнительный',
                    "value" => "+7 000 000 00 00",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'email',
                    "value" => "info@mail.com",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "#",
                ],

                [
                    "name" => "vk_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Vk',
                    "value" => "#",
                ],

                [
                    "name" => "ws_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на WhatsApp',
                    "value" => "#",
                ],

                [
                    "name" => "main_header",
                    "type" => "rich",
                    'title' => 'Заголовок на главной',
                    "value" => "Навесные объемные<br>ФАСАДЫ",
                ],

                [
                    "name" => "main_sub_header",
                    "type" => "rich",
                    'title' => 'Подзаголовок на главной',
                    "value" => "Навесные фасадные системы (НФС) с вентилируемым зазором ИБЭКС - это современный способ обезопасить внешние с тены здания от негативного влияния окружающей среды",
                ],

                [
                    "name" => "main_text",
                    "type" => "rich",
                    'title' => 'Текст на главной',
                    "value" => file_get_contents(public_path('text//main.html')),
                ],

            ]);
    }
}
