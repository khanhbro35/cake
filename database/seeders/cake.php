<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class cake extends Seeder
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
                'code_cake' =>'cc_01',
                'name' =>'dozen cupcake',
                'price'=> 32.00,
                'code_type' => 'cc',
                'img' => 'product-1.jpg'
            ],
            [
                'code_cake' =>'cc_02',
                'name' =>'cookies and cream',
                'price'=> 30.00,
                'code_type' => 'cc',
                'img' => 'product-2.jpg'
            ],
            [
                'code_cake' =>'cc_03',
                'name' =>'gluten free mini dozen',
                'price'=> 31.00,
                'code_type' => 'cc',
                'img' => 'product-3.jpg'
            ],
            [
                'code_cake' =>'cc_04',
                'name' =>'cookie dough',
                'price'=> 25.00,
                'code_type' => 'cc',
                'img' => 'product-4.jpg'
            ],
            [
                'code_cake' =>'cc_05',
                'name' =>'vanilla salted caramel',
                'price'=> 05.00,
                'code_type' => 'cc',
                'img' => 'product-5.jpg'
            ],
            [
                'code_cake' =>'cc_06',
                'name' =>'german chocolate',
                'price'=> 14.00,
                'code_type' => 'cc',
                'img' => 'product-6.jpg'
            ],
            [
                'code_cake' =>'cc_07',
                'name' =>'dulce de leche',
                'price'=> 32.00,
                'code_type' => 'cc',
                'img' => 'product-7.jpg'
            ],
            [
                'code_cake' =>'cc_08',
                'name' =>'mississippi mud',
                'price'=> 08.00,
                'code_type' => 'cc',
                'img' => 'product-8.jpg'
            ],
            [
                'code_cake' =>'cc_09',
                'name' =>'tequila sunrise',
                'price'=> 10.00,
                'code_type' => 'cc',
                'img' => 'product-14.png'
            ],
            [
                'code_cake' =>'cc_10',
                'name' =>'wedding cake ',
                'price'=> 15.00,
                'code_type' => 'cc',
                'img' => 'product-15.png'
            ],
            [
                'code_cake' =>'bt_01',
                'name' =>'blue riibon',
                'price'=> 10.00,
                'code_type' => 'bt',
                'img' => 'product-16.jpg'
            ],
            [
                'code_cake' =>'bt_02',
                'name' =>'yellow butter',
                'price'=> 12.00,
                'code_type' => 'bt',
                'img' => 'product-17.jpg'
            ],
            [
                'code_cake' =>'bt_03',
                'name' =>'kentucky butter',
                'price'=> 15.00,
                'code_type' => 'bt',
                'img' => 'product-18.jpg'
            ],
            [
                'code_cake' =>'bt_04',
                'name' =>'kentucky sugar ',
                'price'=> 17.00,
                'code_type' => 'bt',
                'img' => 'product-19.jpg'
            ],
            [
                'code_cake' =>'bt_05',
                'name' =>'lemon drizzle',
                'price'=> 20.00,
                'code_type' => 'bt',
                'img' => 'product-20.jpg'
            ],
            [
                'code_cake' =>'bt_06',
                'name' =>'keto pumpkin gooey',
                'price'=> 25.00,
                'code_type' => 'bt',
                'img' => 'product-21.jpg'
            ],
            [
                'code_cake' =>'bt_07',
                'name' =>'chocolate butter',
                'price'=> 30.00,
                'code_type' => 'bt',
                'img' => 'product-22.jpg'
            ],
            [
                'code_cake' =>'bt_08',
                'name' =>'cream butter',
                'price'=> 30.00,
                'code_type' => 'bt',
                'img' => 'product-25.jpg'
            ],
            [
                'code_cake' =>'bt_09',
                'name' =>'milk butter',
                'price'=> 30.00,
                'code_type' => 'bt',
                'img' => 'product-23.jpg'
            ],
            [
                'code_cake' =>'bt_10',
                'name' =>'gluten butter',
                'price'=> 15.00,
                'code_type' => 'bt',
                'img' => 'product-24.jpg'
            ],
            [
                'code_cake' =>'rv_01',
                'name' =>'cake type 1',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-26.jpeg'
            ],
            [
                'code_cake' =>'rv_02',
                'name' =>'cake type 2',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-27.jpg'
            ],
            [
                'code_cake' =>'rv_03',
                'name' =>'cake type 3',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-28.jpg'
            ],
            [
                'code_cake' =>'rv_04',
                'name' =>'cake type 4',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-29.jpg'
            ],
            [
                'code_cake' =>'rv_05',
                'name' =>'cake type 5',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-30.jpg'
            ],
            [
                'code_cake' =>'rv_06',
                'name' =>'cake type 6',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-31.jpg'
            ],
            [
                'code_cake' =>'rv_07',
                'name' =>'cake type 7',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-32.jpg'
            ],
            [
                'code_cake' =>'rv_08',
                'name' =>'cake type 8',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-33.jpeg'
            ],
            [
                'code_cake' =>'rv_09',
                'name' =>'cake type 9',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-34.jpg'
            ],
            [
                'code_cake' =>'rv_10',
                'name' =>'cake type 10',
                'price'=> 20.00,
                'code_type' => 'rv',
                'img' => 'product-35.jpg'
            ],
            [
                'code_cake' =>'bc_01',
                'name' =>'chocolate and cream',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-36.jpeg'
            ],
            [
                'code_cake' =>'bc_02',
                'name' =>'honey',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-37.jpeg'
            ],
            [
                'code_cake' =>'bc_03',
                'name' =>'einkorn digestive',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-38.jpg'
            ],
            [
                'code_cake' =>'bc_04',
                'name' =>'tarla dalal karachi',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-39.jpg'
            ],
            [
                'code_cake' =>'bc_05',
                'name' =>'ginger snap',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-40.jpg'
            ],
            [
                'code_cake' =>'bc_06',
                'name' =>'love bug',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-41.jpg'
            ],
            [
                'code_cake' =>'bc_07',
                'name' =>'custard creams',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-45.jpg'
            ],
            [
                'code_cake' =>'bc_08',
                'name' =>'gluten-free',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-42.jpg'
            ],
            [
                'code_cake' =>'bc_09',
                'name' =>'dinosaur',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-43.jpg'
            ],
            [
                'code_cake' =>'bc_10',
                'name' =>'lemon and elderflower',
                'price'=> 10.00,
                'code_type' => 'bc',
                'img' => 'product-44.jpg'
            ],
            [
                'code_cake' =>'dn_01',
                'name' =>'chocolate sprinkle yeast',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-46.jpeg'
            ],
            [
                'code_cake' =>'dn_02',
                'name' =>'glazed',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-47.jpg'
            ],
            [
                'code_cake' =>'dn_03',
                'name' =>'basic fried',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-48.jpg'
            ],
            [
                'code_cake' =>'dn_04',
                'name' =>'lemony glazed',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-49.jpg'
            ],
            [
                'code_cake' =>'dn_05',
                'name' =>'oreo',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-55.jpg'
            ],
            [
                'code_cake' =>'dn_06',
                'name' =>'chocolate',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-50.jpg'
            ],
            [
                'code_cake' =>'dn_07',
                'name' =>'sugar',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-51.jpg'
            ],
            [
                'code_cake' =>'dn_08',
                'name' =>'baked vegan',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-52.jpg'
            ],
            [
                'code_cake' =>'dn_09',
                'name' =>'jam',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-53.jpg'
            ],
            [
                'code_cake' =>'dn_10',
                'name' =>'rainbow',
                'price'=> 10.00,
                'code_type' => 'dn',
                'img' => 'product-54.jpg'
            ]
            ];
            foreach ($posts as $post) {
                # code...
                DB::table('cake')->insert($post);
            }
    }
}
