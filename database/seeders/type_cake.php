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
            'type_name' =>'cupcake',
        ],
        [
            'code_type' => 'bt',
            'type_name' =>'butter',
        ],
        [
            'code_type' => 'rv',
            'type_name' =>'red velvet',
        ],
        [
            'code_type' => 'bc',
            'type_name' =>'biscuit',
        ],
        [
            'code_type' => 'dn',
            'type_name' =>'donut',
        ]
        ];

        foreach ($posts as $post) {
            # code...
            DB::table('type')->insert($post);
        }
    }
}
