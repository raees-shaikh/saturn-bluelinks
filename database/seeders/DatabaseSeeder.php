<?php

namespace Database\Seeders;

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
        $this->call(CmsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductCategorySeeder::class);
    $this->call(ProductSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
