<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'Usuario']);

        //Permisos
        $permission = Permission::create(['name' => 'Crear Producto'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'Ver Producto']);
        $permission = Permission::create(['name' => 'Borrar Producto'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'editar Producto'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'Crear Categoria'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'Ver Categoria']);
        $permission = Permission::create(['name' => 'Borrar Categoria'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'editar Categoria'])->syncRoles($role1);
    }
}
