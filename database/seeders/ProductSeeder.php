<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
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
               'name' => 'LG mobile',
               'price' =>'200',
               'description' =>'A smartphone with 4gb ram much more feature',
               'category'=>'mobile',
               'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ],
        [
            'name' => 'Oppo mobile',
            'price' =>'300',
            'description' =>'A smartphone with 8gb ram much more feature',
            'category'=>'mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/in/mkt/phonelist/products/reno4-pro-blue.png'
           // 'gallery'=>'https://i.gadgets360cdn.com/large/oppo_a58_5g_1667901448659.jpg'
   
        ],
    [
        'name' => 'Panasonic Tv',
        'price' =>'400',
        'description' =>'A smart tv with much more feature',
        'category'=>'tv',
        'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-54146986,imgsize-200,width-1200/54146986.jpg'

    ],
[
    'name' => 'Sony Tv',
    'price' =>'500',
    'description' =>'A siny tv with much more feature',
    'category'=>'tv',
    'gallery'=>'https://m.media-amazon.com/images/I/71+7bU+fkVL._AC_SS450_.jpg'

],
[
    'name' => 'LG fridge',
    'price' =>'200',
    'description' =>'A fridge with much more feature',
    'category'=>'fridge',
    'gallery'=>'https://www.lg.com/in/images/refrigerators/md07558593/gallery/GL-S302RPZX-Refrigerator-Front-View-DZ01.jpg'

]
]);
    }
}
