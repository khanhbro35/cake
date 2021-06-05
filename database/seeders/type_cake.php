<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class type_cake extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [ 
        [
            'code_type' => 'cc',
            'name' =>'cupcake',
        ],
        [
            'code_type' => 'bt',
            'name' =>'butter',
        ],
        [
            'code_type' => 'rv',
            'name' =>'red velvet',
        ],
        [
            'code_type' => 'bc',
            'name' =>'biscuit',
        ],
        [
            'code_type' => 'dn',
            'name' =>'donut',
        ]
        ];

        foreach ($posts as $post) {
            # code...
            DB::table('type')->insert($post);
        }
    }
}
