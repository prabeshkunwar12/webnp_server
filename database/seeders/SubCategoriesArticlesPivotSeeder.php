<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class SubCategoriesArticlesPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = fopen(database_path('ArticlesCSVs/Pivot.csv'), 'r');

        $header = fgetcsv($csv);

        while ($data = fgetcsv($csv)){
            DB::table('subCategory_articles_pivot')->insert([
                'sub_category_id' => $data[0],
                'article_id' => $data[1],
                // Add other columns as needed
            ]);
        }
    }
}
