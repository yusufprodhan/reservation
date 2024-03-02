<?php

namespace Database\Seeders;

use App\Models\BillingAddress;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email','sales@pixclipping.com')->first();
        $billingAddress = new BillingAddress();
        $billingAddress->create([
            'user_id'=>$user->id,
            'bill_to'=>'Shahriar Sujan',
            'billing_email'=>'sales@pixclipping.com',
            'billing_phone'=>'+31 6-86135136',
            'vat_id'=>'VAT 2345',
            'website_url'=>'https://www.pixclipping.com/',
            'billing_address'=>'Burgemeester Van Leeuwenlaan',
            'billing_city'=>'North Holland',
            'billing_state'=>'Amsterdam',
            'billing_country_id'=>155,
            'billing_post_code'=>'112c',
        ]);
    }
}
