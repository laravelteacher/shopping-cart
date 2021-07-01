<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
DB::table('products')->insert([
    'name' => 'Samsung Galaxy S9',
    'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
    'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
    'price' => 698.88
 ]);

 DB::table('products')->insert([
     'name' => 'iPhone 12 Pro',
     'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
     'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-blue-hero?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1604021661000',
     'price' => 983.00
 ]);

 DB::table('products')->insert([
     'name' => 'iPhone 12',
     'description' => 'New condition
• No returns, but backed by eBay Money back guarantee',
     'photo' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-red-select-2020?wid=470&hei=556&fmt=png-alpha&.v=1604343703000',
     'price' => 675.00
 ]);

 DB::table('products')->insert([
     'name' => 'LG V10 H900',
     'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
     'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
     'price' => 159.99
 ]);

 DB::table('products')->insert([
     'name' => 'iPhone 12',
     'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
     'photo' => 'https://www.att.com/idpassets/global/devices/phones/apple/apple-iphone-12/carousel/black/64gb/6858C-hero-black_carousel.png',
     'price' => 68.00
 ]);

 DB::table('products')->insert([
     'name' => 'HTC One M10',
     'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
     'photo' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
     'price' => 129.99
 ]);

    }
}
