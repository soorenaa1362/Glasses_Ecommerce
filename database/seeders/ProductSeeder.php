<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Aspen',
                'price' => '120000',
                'category' => 'Medical',
                'description' => 'Dry Eye Eyewear',
                'image' => 'https://cdn.shopify.com/s/files/1/1531/1431/products/Aspen-Glossy-Black-Clear-Lens-Profile-7eye-Motorcycle-Sunglasses_2a294476-ca38-4d70-bbe9-0756029de53c_1200x.jpg?v=1598629015',
            ],
            [
                'name' => 'Taku',
                'price' => '121000',
                'category' => 'Medical',
                'description' => 'Prescription Motorcycle Sunglasses',
                'image' => 'https://cdn.shopify.com/s/files/1/1468/0456/products/Taku-Glossy-Black-Clear-Lens-Profile-7eye-Airshield-Motorcycle-Sunglasses_b0b51d47-948c-4bfb-9d1d-c33a1ab55361_1200x.jpg?v=1603745507',
            ],
            [
                'name' => 'Polaroid',
                'price' => '98000',
                'category' => 'Medical',
                'description' => 'Medical Frame Polaroid Silver',
                'image' => 'https://ae01.alicdn.com/kf/Hc20c51c17cc04150ae5fef80d729ebaaf/Medical-frame-Polaroid-Silver-PLD-d382-eyeglasses-frame-Polaroid.jpg_Q90.jpg_.webp',
            ],
            [
                'name' => 'Aviator',
                'price' => '134000',
                'category' => 'Sun',
                'description' => 'Best Aviator Sunglasses For Men',
                'image' => 'https://i.pinimg.com/originals/3f/23/6d/3f236d52bdc1230fb22c059c16e04942.jpg',
            ],
            [
                'name' => 'Avalanche',
                'price' => '160000',
                'category' => 'Sun',
                'description' => 'Avalanche FLX-T Sport Sunglasses',
                'image' => 'https://cdn.shopify.com/s/files/1/0017/1799/3537/products/00024291516224_ALNO_websize_1024x.jpg?v=1649708477',
            ],
        ]);
    }
}
