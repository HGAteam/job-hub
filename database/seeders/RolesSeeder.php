<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();

        $data = $this->data();

        foreach ($data as $value) {
          $role = Role::create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'description' => $value['description'],
            ]);
            if($role->name == 'Administrator'){
                $role->syncPermissions($permissions);
            }
            if($role->name == 'Editor'){
                $role->syncPermissions(['Create Categories','Read Categories','Update Categories','Delete Categories','Create Tags','Read Tags','Update Tags','Delete Tags', 'Create Posts', 'Read Posts', 'Update Posts', 'Delete Posts', 'Create Comments', 'Read Comments', 'Update Comments', 'Delete Comments']);
            }
            if($role->name == 'Author'){
                $role->syncPermissions(['Create Posts', 'Read Posts', 'Update Posts', 'Delete Posts', 'Create Comments', 'Read Comments', 'Update Comments', 'Delete Comments']);
            }
            if($role->name == 'Registered User'){
                $role->syncPermissions(['Create Comments', 'Read Comments', 'Update Comments', 'Delete Comments']);
            }
        }
    }

    public function data()
    {
        return [
            ['name' => 'Administrator', 'description' => 'Full access to the system. Can create, edit and delete publications and categories. Can manage users and assign roles. Can manage comments and moderate them. Can configure site options and customize its appearance.'],
            ['name' => 'Editor', 'description' => 'Can create, edit and delete posts and categories. Can manage comments, but not moderate them. Does not have access to site settings or user management.'],
            ['name' => 'Author', 'description' => 'Can create, edit and delete their own posts. Can view and comment on other users posts. Does not have access to category management or site configuration.'],
            ['name' => 'Registered User', 'description' => 'Can view all blog posts and comments. Can comment on posts. Can have a personalized profile and set notification preferences.'],
        ];
    }
}
