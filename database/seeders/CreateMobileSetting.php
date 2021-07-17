<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Modules\Mobile\Entities\Setting;
use DB;

class CreateMobileSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            Setting::$ABOUT_KEY => optional(Company::admin())->notes . " -",
            Setting::$CONTACT_PHONE_KEY => optional(Company::admin())->phone,
            Setting::$CONTACT_ADDRESS_KEY => optional(Company::admin())->address,
            Setting::$CONTACT_EMAIL_KEY => optional(Company::admin())->email,
            Setting::$CONTACT_WEBSITE_KEY => "https://ufs-eg.com"
        ];

        foreach ($data as $key => $value) {
            Setting::create([
                "name" => $key,
                "value" => $value,
                "company_id" => optional(Company::admin())->id,
            ]);
        }
    }
}
