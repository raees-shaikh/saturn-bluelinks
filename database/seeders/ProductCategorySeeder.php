<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productcategories = [
'AGROTECH TEXTILES',
'BUILDTECH TEXTILES',
'CLOTHTECH  TEXTILES',
'GEOTECH  TEXTILES',
'HOMETECH  TEXTILES',
'INDUTECH  TEXTILES',
'MEDITECH  TEXTILES',
'MOBILTECH TEXTILES',
'OEKOTECH TEXTILES',
'PACKTECH TEXTILES',
'PROTECH TEXTILES',
'SPORTECH TEXTILES',
'INFRATECH TEXTILES',
'FILTERTECH TEXTILES',
  ];

        foreach ($productcategories as $pc) {
            DB::table('product_categories')->insert([
                'title' => $pc,
                'image' => null,
                'slug' => Str::slug($pc),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
