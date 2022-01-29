<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'photo' =>'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 698.88
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone X',
            'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'photo' => 'https://pngshare.com/wp-content/uploads/2021/06/Logo-Apple-iPhone-X-9.png',
            'price' => 983.00
        ]);
        DB::table('products')->insert([
            'name' => 'Google Pixel 2 XL',
            'description' => 'New condition• No returns, but backed by eBay Money back guarantee',
            'photo' => 'https://www.pngfind.com/pngs/m/264-2648074_clip-freeuse-stock-google-png-for-free-download.png',
            'price' => 675.00
        ]);
        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'description' => 'NETWORK Technology GSM. Protection CorningGorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, OceanBlue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' =>'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 159.99
        ]);
        DB::table('products')->insert([
            'name' => 'Huawei Elate', 'description' => 'Cricket Wireless - Huawei Elate. New Sealed HuaweiElate Smartphone.',
            'photo' => 'https://www.pngfind.com/pngs/m/424-4249591_huawei-y5-2018-lite-hd-png-download.png',
            'price' => 68.00
        ]);
        DB::table('products')->insert([
            'name' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and willshow minor scratches and/or scuff marks.',
            'photo' => 'https://www.pngfind.com/pngs/m/499-4993616_click-to-enlarge-image-m9-gold-10-samsung.png',
            'price' => 129.99
        ]);
    }
}
