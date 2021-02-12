<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
              'id'=>1,
              'name'=>'Jack Daniels',
              'description'=>'This is a Jack Daniels whiskey, very good',
              'category_id'=>4 
            ],
            [
              'id'=>2,
              'name'=>'Water',
              'description'=>'This is for drinking',
              'category_id'=>2
                  
            ], 
            [
              'id'=>3,
              'name'=>'Bacon',
              'description'=>'This is for eating',
              'category_id'=>1    
            ], 
            [
              'id'=>4,
              'name'=>'Milk',
              'description'=>'Strong bones',
              'category_id'=>3      
            ],
        ]);
    }
} 
