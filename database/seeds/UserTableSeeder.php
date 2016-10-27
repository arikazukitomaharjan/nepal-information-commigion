<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/13/15
 * Time: 8:11 PM
 */

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'id' => 1,
            'username' => 'foo',
            'email' => 'foo@gmail.com',
            'password' => Hash::make('foo123')
            
        ));
        User::create(array(
            'id' => 2,
            'username' => 'amrit',
            'email' => 'amrit@gmail.com',
            'password' => Hash::make('amrit123')
            
        ));


    }

}