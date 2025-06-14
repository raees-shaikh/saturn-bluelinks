<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Spinning',
                'image' => 'sp.png'
            ],
            [
                'name' => 'Weaving',
                'image' => 'w.png'
            ],
            [
                'name' => 'Knitting',
                'image' => 'k.png'
            ],
            [
                'name' => 'Processing & Finishing',
                'image' => 'pf.png'
            ],
            [
                'name' => 'Man Made Fiber',
                'image' => 'mmf.png'
            ],
            [
                'name' => 'Non-Wovens',
                'image' => 'nw.png'
            ],
            [
                'name' => 'Others',
                'image' => 'o.png'
            ],






        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => Str::ucfirst($category['name']),
                'image' => $category['image'],
                'slug' => Str::slug($category['name']),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
        $categories_img = Category::get();
        foreach ($categories_img as $category) {
            try {
                File::copy(public_path('images/icons/' . $category->image), storage_path('app/public/images/latest_arrival/' . $category->image));
            } catch (\Throwable $th) {
                Log::error($th);
            }
        }
    }
}
