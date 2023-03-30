<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articles;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = fopen(database_path('ArticlesCSVs/Articles.csv'), 'r');
        $header = fgetcsv($csv);
        
        while ($data = fgetcsv($csv)) {
            $record = new Articles();
            $record->id = $data[0];
            $record->name = $data[1];
            $record->URL = $data[2];
            $record->location = $data[3];
            $record->group = $data[4];
            $record->save();
        }
        
        fclose($csv);
    }
}
