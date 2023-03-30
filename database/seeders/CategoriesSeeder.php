<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = fopen(database_path('ArticlesCSVs/Categories.csv'), 'r');
        $header = fgetcsv($csv);
        
        while ($data = fgetcsv($csv)) {
            $record = new Categories();
            $record->id = $data[0];
            $record->name = $data[1];
            $record->save();
        }
        
        fclose($csv);
    }
}
