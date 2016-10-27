<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/13/15
 * Time: 8:14 PM
 */
use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
class PermissionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('permissions')->delete();

        $createPost = new Permission();
        $createPost->name         = 'create-post';
        $createPost->display_name = 'Create Posts'; // optional
        $createPost->description  = 'create new blog posts'; // optional
        $createPost->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; // optional
        $editUser->description  = 'edit existing users'; // optional
        $editUser->save();

        $admin = Role::where('name', '=', 'admin')->first();
        $owner = Role::where('name', '=', 'owner')->first();
        $admin->attachPermission($createPost);
        // equivalent to $admin->perms()->sync(array($createPost->id));

        $owner->attachPermissions(array($createPost, $editUser));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }

}
