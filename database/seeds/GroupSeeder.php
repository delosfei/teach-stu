<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups=[
            ['name'=>'普通会员组','is_default'=>true],
            ['name'=>'VIP'],
        ];
        collect($groups)->map(function ($group){
            Group::create($group);
        });
    }
}
