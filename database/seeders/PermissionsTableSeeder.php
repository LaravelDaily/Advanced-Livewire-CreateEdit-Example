<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 23,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 28,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 29,
                'title' => 'product_create',
            ],
            [
                'id'    => 30,
                'title' => 'product_edit',
            ],
            [
                'id'    => 31,
                'title' => 'product_show',
            ],
            [
                'id'    => 32,
                'title' => 'product_delete',
            ],
            [
                'id'    => 33,
                'title' => 'product_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
