<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,30)->create();
        $user=User::find(1);
        $user->name="delos";
        $user->password='admin888';
        $user->email='9739723@qq.com';
        $user->save();

        $user=User::find(2);
        $user->name="李四";
        $user->password='admin888';
        $user->email='9739724@qq.com';
        $user->save();

        $user=User::find(3);
        $user->name="王五";
        $user->password='admin888';
        $user->email='9739725@qq.com';
        $user->save();
    }
}
