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
                    "value" => "+7 (4712) 771-033",
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
                    "value" => "info@ibex.ru",
                ],

                [
                    "name" => "adress",
                    "type" => "plan",
                    'title' => 'Адрес компании',
                    "value" => "305527, Курская область, Курский район, д. Ворошнево, ул. Сосновая, д. 1/1",
                ],

                [
                    "name" => "geo",
                    "type" => "plan",
                    'title' => 'Координаты на карте',
                    "value" => "51.65145413210463,36.04618436242675",
                ],

                [
                    "name" => "organization_name",
                    "type" => "plan",
                    'title' => 'Название организации',
                    "value" => "ООО «ИБЕКС»",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "tg://resolve?domain=IBEX_KURSK",
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
                    "value" => "https://wa.me/79051541323",
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
                    "value" => "Навесные фасадные системы (НФС) с вентилируемым зазором ИБЕКС - это современный способ обезопасить внешние с тены здания от негативного влияния окружающей среды",
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
