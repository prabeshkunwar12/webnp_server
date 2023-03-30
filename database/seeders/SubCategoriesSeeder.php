<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategories;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = fopen(database_path('ArticlesCSVs/SubCategories.csv'), 'r');
        $header = fgetcsv($csv);
        
        while ($data = fgetcsv($csv)) {
            $record = new SubCategories();
            $record->id = $data[0];
            $record->name = $data[1];
            $record->categories_id = $data[2];
            $record->img_alt = $data[3];
            $record->save();
        }
        
        fclose($csv);
    }
}
