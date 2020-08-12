<?php

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'title' => '后盾人',
            'domain' => 'http://teach-stu.test',
            'config' => [],
            'user_id' => 1
        ]);
    }
}
