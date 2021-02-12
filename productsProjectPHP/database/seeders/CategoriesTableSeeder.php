<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
              'id'=>1,
              'name'=>'Meat'      
            ],
            [
              'id'=>2,
              'name'=>'Drinks'
                  
            ], 
            [
                'id'=>3,
                'name'=>'Dairy'      
            ], 
            [
                'id'=>4,
                'name'=>'Alcohol'      
            ],
        ]);
    }
} 

