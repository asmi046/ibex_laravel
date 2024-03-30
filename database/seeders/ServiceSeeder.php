<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
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
                'short_description' => "Формируем сталь по вашему образцу. Гибкость и точность – наши ключевые черты для создания качественных металлических изделий.",
                'description' => file_get_contents(public_path('data_src//services//uslugi_gibkmetal//text.html')),
                'seo_title' => "Гибка металла",
                'seo_description' => "Гибка металла. Формируем сталь по вашему образцу.",
            ],
            [
                'title' => "Порошковая покраска",
                'slug' => Str::slug("Порошковая покраска"),
                'order' => 2,
                'short_description' => "Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию – ваше долговечное решение.",
                'description' => file_get_contents(public_path('data_src//services//poroshok_color//text.html')),
                'seo_title' => "Порошковая покраска",
                'seo_description' => "Порошковая покраска. Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию",
            ],
            [
                'title' => "Холодная штамповка",
                'slug' => Str::slug("Холодная штамповка"),
                'order' => 3,
                'short_description' => "Преобразовываем металл в точные формы. Точность, надежность и высокая производительность – наши стандарты.",
                'description' => file_get_contents(public_path('data_src//services//cold_stamps//text.html')),
                'seo_title' => "Холодная штамповка",
                'seo_description' => "Холодная штамповка. Преобразовываем металл в точные формы. Точность, надежность и высокая производительность",
            ],
            [
                'title' => "Обработка рулонной стали",
                'slug' => Str::slug("Обработка рулонной стали"),
                'order' => 4,
                'short_description' => "Точная обработка для максимальной прочности. Наши технологии – ваш путь к идеальным металлическим конструкциям.",
                'description' => "Точная обработка для максимальной прочности. Наши технологии – ваш путь к идеальным металлическим конструкциям.",
                'seo_title' => "Обработка рулонной стали",
                'seo_description' => "Обработка рулонной стали. Точная обработка для максимальной прочности.",
            ],
            [
                'title' => "Лазерная сварка",
                'slug' => Str::slug("Лазерная сварка"),
                'order' => 5,
                'short_description' => "Высокоточная сварка, оптимально подходит для деталей сложной формы и разнородных материалов",
                'description' => file_get_contents(public_path('data_src//services//laser_svarka//text.html')),
                'seo_title' => "Лазерная сварка",
                'seo_description' => "Высокоточная сварка, оптимально подходит для деталей сложной формы и разнородных материалов",
            ],
        ];

        foreach ($data_services as $item) {
            $p_id = DB::table("services")->insertGetId($item);
        }
    }
}
