<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            [
                'category_id' => 1,
                'title' => 'Adjustable Laptop Stand',
                'price' => 249,
                'description' => 'viozon Laptop Stand',
                'image' => 'Adjustable Laptop Stand.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 1,
                'title' => 'Woody Table Adjustable Laptop Desk',
                'price' => 1924,
                'description' => 'Woody Table Adjustable Laptop Desk',
                'image' => 'Woody Table Adjustable.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 1,
                'title' => 'MCHOSE Adjustable Laptop Stand',
                'price' => 504,
                'description' => 'MCHOSE Adjustable Laptop Stand',
                'image' => 'MCHOSE Adjustable.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 1,
                'title' => 'Adjustable Notebook Stand',
                'price' => 600,
                'description' => 'Laptop Cooling Stand',
                'image' => 'Adjustable Notebook.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 2,
                'title' => 'Ergonomic Seat Cushion',
                'price' => 799,
                'description' => 'Ergonomic Seat Cushion',
                'image' => 'Ergonomic Seat Cushion.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 2,
                'title' => 'Ergonomic Lumbar Support Cushion',
                'price' => 325,
                'description' => 'Lumbar Support Cushion',
                'image' => 'Ergonomic Lumbar Support Cushion.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 2,
                'title' => 'ComfiLife Gel-Enhanced Non-slip',
                'price' => 2998,
                'description' => 'ComfiLife Cushion',
                'image' => 'ComfiLife Gel-Enhanced Non-slip.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 2,
                'title' => 'Max Comfort Square Medical',
                'price' => 544,
                'description' => 'Max Comfort Cushion',
                'image' => 'Max Comfort Square Medical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 3,
                'title' => 'LED Monitor Light Bar',
                'price' => 4699,
                'description' => 'LED Monitor Light Bar',
                'image' => 'LED Monitor Light Bar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 3,
                'title' => 'Marketero LED Desk Monitor Lamp',
                'price' => 1379,
                'description' => 'Marketero LED Desk Monitor Lamp',
                'image' => 'Marketero LED Desk Monitor Lamp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 3,
                'title' => 'Smart RGB Gaming LED Light Bar',
                'price' => 693,
                'description' => 'Smart RGB Gaming LED Light Bar',
                'image' => 'Smart RGB Gaming LED Light Bar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 3,
                'title' => 'Computer Monitor Lamp',
                'price' => 1350,
                'description' => 'Computer Monitor Lamp',
                'image' => 'Computer Monitor Lamp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 4,
                'title' => 'Computer Game Mouse Mat',
                'price' => 2000,
                'description' => 'Computer Game Mouse Mat',
                'image' => 'Computer Game Mouse Mat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 4,
                'title' => 'Cheat Sheet Desk Pad',
                'price' => 249,
                'description' => 'Cheat Sheet Desk Pad',
                'image' => 'Cheat Sheet Desk pad.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 4,
                'title' => 'RGB Large Mouse Pad',
                'price' => 341,
                'description' => 'RGB Large Mouse Pad',
                'image' => 'RGB Large Mouse Pad.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 4,
                'title' => 'Minimalist Desk Mat',
                'price' => 264,
                'description' => 'Minimalist Desk Mat',
                'image' => 'Minimalist Desk Mat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}