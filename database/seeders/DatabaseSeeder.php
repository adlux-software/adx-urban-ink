<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Auth\User::create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Auth\Administrator::create([
            'name' => 'Administrator',
            'email' => 'admin@adlux.asia',
            'password' => bcrypt('admin123$'),
        ]);


        //categories seed
        \App\Models\Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
            'is_active' => 1,
        ]);
        \App\Models\Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
            'is_active' => 1,
        ]);

        \App\Models\Size::create([
            'name' => 'Small',
            'code' => 'S',
            'is_active' => 1,
        ]);
        \App\Models\Size::create([
            'name' => 'Medium',
            'code' => 'M',
            'is_active' => 1,
        ]);


        //colors
        \App\Models\Colors::create([
            'name' => 'Red',
            'code' => 'red',
            'is_active' => 1,
        ]);
        \App\Models\Colors::create([
            'name' => 'Blue',
            'code' => 'blue',
            'is_active' => 1,
        ]);



        //products

        \App\Models\Product::create([
            'title' => 'Product 1',
            'slug' => 'product-1',
            'description' => 'Product 1 Description',
            'category_id' => 1,
            'sort_order' => 1,
            'status' => 1,
            'featured' => 1,
            'popular' => 1,
            'BestSellingProduct' => 1,
        ]);

        \App\Models\Product::create([
            'title' => 'Product 2',
            'slug' => 'product-2',
            'description' => 'Product 2 Description',
            'category_id' => 2,
            'sort_order' => 2,
            'status' => 1,
            'featured' => 1,
            'popular' => 1,
            'BestSellingProduct' => 1,
        ]);

        //product variants

        \App\Models\Variant::create([
            'product_id' => 1,
            'color_id' => 1,
            'size_id' => 1,
            'quantity' => 10,
            'mrp' => 100,
            'selling_price' => 90,
            'stock' => 10,
            'sku' => 'SKU-1',
        ]);
        \App\Models\Variant::create([
            'product_id' => 1,
            'color_id' => 2,
            'size_id' => 2,
            'quantity' => 10,
            'mrp' => 100,
            'selling_price' => 90,
            'stock' => 10,
            'sku' => 'SKU-2',
        ]);
        \App\Models\Variant::create([
            'product_id' => 2,
            'color_id' => 1,
            'size_id' => 1,
            'quantity' => 10,
            'mrp' => 100,
            'selling_price' => 90,
            'stock' => 10,
            'sku' => 'SKU-3',
        ]);
        \App\Models\Variant::create([
            'product_id' => 2,
            'color_id' => 2,
            'size_id' => 2,
            'quantity' => 10,
            'mrp' => 100,
            'selling_price' => 90,
            'stock' => 10,
            'sku' => 'SKU-4',
        ]);

    }


}
