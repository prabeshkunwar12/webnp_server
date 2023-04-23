<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  Posts::factory(5)->create();
        $this->call([
            CategoriesSeeder::class,
            SubCategoriesSeeder::class,
            ArticlesSeeder::class,
            SubCategoriesArticlesPivotSeeder::class,
            RoleAndPermissionSeeder::class,
        ]);
    }
}
