<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_services = [
            [
                'title' => "Гибка металла",
                'slug' => Str::slug("Гибка металла"),
                'order' => 1,
                'img' => 'uslugi_gibkmetal_1.jpg',
                'dir' => "uslugi_gibkmetal",
                'short_description' => "Формируем сталь по вашему образцу. Гибкость и точность – наши ключевые черты для создания качественных металлических изделий.",
                'description' => file_get_contents(public_path('data_src//services//uslugi_gibkmetal//text.html')),
                'seo_title' => "Гибка металла",
                'seo_description' => "Гибка металла. Формируем сталь по вашему образцу.",
                'galery' => [
                    [
                        'lnk' => 'uslugi_gibkmetal_1.jpg',
                        'alt' => 'Гибка металла (фото 1)',
                        'title' => 'Гибка металла (фото 1)',
                    ],
                    [
                        'lnk' => 'uslugi_gibkmetal_2.jpeg',
                        'alt' => 'Гибка металла (фото 2)',
                        'title' => 'Гибка металла (фото 2)',
                    ],
                    [
                        'lnk' => 'uslugi_gibkmetal_3.jpg',
                        'alt' => 'Гибка металла (фото 3)',
                        'title' => 'Гибка металла (фото 3)',
                    ],
                ]
            ],
            [
                'title' => "Порошковая покраска",
                'slug' => Str::slug("Порошковая покраска"),
                'order' => 2,
                'img' => 'poroshok_color_1.webp',
                'dir' => "poroshok_color",
                'short_description' => "Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию – ваше долговечное решение.",
                'description' => file_get_contents(public_path('data_src//services//poroshok_color//text.html')),
                'seo_title' => "Порошковая покраска",
                'seo_description' => "Порошковая покраска. Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию",
                'galery' => [
                    [
                        'lnk' => 'poroshok_color_1.webp',
                        'alt' => 'Порошковая покраска (фото 1)',
                        'title' => 'Порошковая покраска (фото 1)',
                    ],
                ]
            ],
            [
                'title' => "Холодная штамповка",
                'slug' => Str::slug("Холодная штамповка"),
                'order' => 3,
                'img' => 'cold_stamps_1.jpg',
                'dir' => "cold_stamps",
                'short_description' => "Преобразовываем металл в точные формы. Точность, надежность и высокая производительность – наши стандарты.",
                'description' => file_get_contents(public_path('data_src//services//cold_stamps//text.html')),
                'seo_title' => "Холодная штамповка",
                'seo_description' => "Холодная штамповка. Преобразовываем металл в точные формы. Точность, надежность и высокая производительность",
                'galery' => [
                    [
                        'lnk' => 'cold_stamps_1.jpg',
                        'alt' => 'Холодная штамповка (фото 1)',
                        'title' => 'Холодная штамповка (фото 1)',
                    ],
                    [
                        'lnk' => 'cold_stamps_2.jpg',
                        'alt' => 'Холодная штамповка (фото 2)',
                        'title' => 'Холодная штамповка (фото 2)',
                    ],
                    [
                        'lnk' => 'cold_stamps_3.png',
                        'alt' => 'Холодная штамповка (фото 3)',
                        'title' => 'Холодная штамповка (фото 3)',
                    ],
                    [
                        'lnk' => 'cold_stamps_4.webp',
                        'alt' => 'Холодная штамповка (фото 4)',
                        'title' => 'Холодная штамповка (фото 4)',
                    ],
                ]
            ],

            [
                'title' => "Лазерная сварка",
                'slug' => Str::slug("Лазерная сварка"),
                'order' => 5,
                'img' => 'laser_svarka.jpg',
                'dir' => "laser_svarka",
                'short_description' => "Высокоточная сварка, оптимально подходит для деталей сложной формы и разнородных материалов",
                'description' => file_get_contents(public_path('data_src//services//laser_svarka//text.html')),
                'seo_title' => "Лазерная сварка",
                'seo_description' => "Высокоточная сварка, оптимально подходит для деталей сложной формы и разнородных материалов",
                'galery' => [
                    [
                        'lnk' => 'laser_svarka.jpg',
                        'alt' => 'Лазерная сварка (фото 1)',
                        'title' => 'Лазерная сварка (фото 1)',
                    ],
                    [
                        'lnk' => 'laser_svarka_2.webp',
                        'alt' => 'Лазерная сварка (фото 2)',
                        'title' => 'Лазерная сварка (фото 2)',
                    ],
                ]
            ],
        ];

        foreach ($data_services as $item) {
            if (isset($item['img']) && !empty($item['img']))
                Storage::disk('public')->put("services/".$item['img'], file_get_contents(public_path('data_src//services//'.$item['dir'].'//'.$item['img'])), 'public');

            if (isset($item['galery']) && !empty($item['galery'])) {
                foreach ($item['galery'] as $fitem) {
                    Storage::disk('public')->put("services/".$fitem['lnk'], file_get_contents(public_path('data_src//services//'.$item['dir'].'//'.$fitem['lnk'])), 'public');
                }
                $item['galery'] = json_encode($item['galery']);
            }

            unset($item['dir']);
            $p_id = DB::table("services")->insertGetId($item);
        }
    }
}
