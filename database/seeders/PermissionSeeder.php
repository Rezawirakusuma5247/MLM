<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class PermissionSeeder extends Seeder
{
    use HasRoles;
    public function run(): void
    {
       $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name'=>'admin']);
       $role_writer = Role::updateOrCreate(
            [
                'name' => 'sponsor'
            ],
            ['name'=>'sponsor']);
       $role_rank = Role::updateOrCreate(
            [
                'name' => 'guest'
            ],
            ['name'=>'guest']);

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission2= Permission::updateOrCreate(
            [
                'name' => 'view_chart_ondashboard',
            ],
            ['name' => 'view_chart_ondashboard']
        );

        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'rank',
            ],
            [
                'name' => 'rank',
            ]
            );


        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_writer->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission3);
        $role_writer->givePermissionTo($permission3);
        $role_rank->givePermissionTo($permission3);



        $user = User::find(1);
        $user2 = User::find(2);
        // $user3 = User::find(3);
        $user->assignRole(['admin']);
        $user2->assignRole(['sponsor']);
        // $user3->assignRole(['guest']);
    }
}
