<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TecnicalDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("td/ecsp_z_1.webp", file_get_contents(public_path('data_src//td//ecsp_z_1.webp')), 'public');
        Storage::disk('public')->put("td/expertnoe_zakluhenie.pdf", file_get_contents(public_path('data_src//td//expertnoe_zakluhenie.pdf')), 'public');

        DB::table("tecnical_documents")->insert(
            [
                [
                    'img' => "ecsp_z_1.webp",
                    'file' => "expertnoe_zakluhenie.pdf",
                    'type' => "",
                    'title' => "Экспертное заключение № 02/24-3",
                ],

        ]);
    }
}
