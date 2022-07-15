<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
    	$admin = Role::create(['name' => 'admin']);
    	$manager = Role::create(['name' => 'manager']);
    	$salesman = Role::create(['name' => 'salesman']);

        //create permission

        $permissions = [

			[
				'group_name' => 'employee',
				'permissions' => [
					'manage.employee',
					'add.employee',
					'edit.employee',
					'delete.employee',
				]
				],
				[
					'group_name' => 'department',
					'permissions' => [
						'manage.department',
						'add.department',
						'edit.department',
						'delete.department',
					]
				],
				[
						'group_name' => 'others',
						'permissions' => [
							'dashboard.view',
        					'password.change',
						]
				],
        	
        ];

        //Assign Permission

        for ($i=0; $i < count($permissions); $i++) { 
			$permissionGroup = $permissions[$i]['group_name'];
			for ($j=0; $j < count($permissions[$i]['permissions']); $j++) { 
        	$permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
        	$admin->givePermissionTo($permission);
			$permission->assignRole($admin);
			}
        }


    }
}
