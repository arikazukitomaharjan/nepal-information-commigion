<?php

/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/13/15
 * Time: 8:08 PM
 */
use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class RoleTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->delete();

        $owner = new Role();
        $owner->name = 'artist';
        $owner->display_name = 'Artist'; // optional
        $owner->description = 'Artist has his own profile'; // optional
        $owner->save();


        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user = User::where('email', '=', 'foo@gmail.com')->first();

        // role attach alias
        $user->attachRole($admin); // parameter can be an Role object, array, or id


    }

}