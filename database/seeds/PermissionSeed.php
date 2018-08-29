<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'categoria_access',],
            ['id' => 18, 'title' => 'categoria_create',],
            ['id' => 19, 'title' => 'categoria_edit',],
            ['id' => 20, 'title' => 'categoria_view',],
            ['id' => 21, 'title' => 'categoria_delete',],
            ['id' => 22, 'title' => 'banner_access',],
            ['id' => 23, 'title' => 'banner_create',],
            ['id' => 24, 'title' => 'banner_edit',],
            ['id' => 25, 'title' => 'banner_view',],
            ['id' => 26, 'title' => 'banner_delete',],
            ['id' => 27, 'title' => 'video_access',],
            ['id' => 28, 'title' => 'video_create',],
            ['id' => 29, 'title' => 'video_edit',],
            ['id' => 30, 'title' => 'video_view',],
            ['id' => 31, 'title' => 'video_delete',],
            ['id' => 32, 'title' => 'atividade_access',],
            ['id' => 33, 'title' => 'atividade_create',],
            ['id' => 34, 'title' => 'atividade_edit',],
            ['id' => 35, 'title' => 'atividade_view',],
            ['id' => 36, 'title' => 'atividade_delete',],
            ['id' => 37, 'title' => 'cliente_access',],
            ['id' => 38, 'title' => 'cliente_create',],
            ['id' => 39, 'title' => 'cliente_edit',],
            ['id' => 40, 'title' => 'cliente_view',],
            ['id' => 41, 'title' => 'cliente_delete',],
            ['id' => 43, 'title' => 'home_access',],
            ['id' => 44, 'title' => 'depoimento_access',],
            ['id' => 45, 'title' => 'depoimento_create',],
            ['id' => 46, 'title' => 'depoimento_edit',],
            ['id' => 47, 'title' => 'depoimento_view',],
            ['id' => 48, 'title' => 'depoimento_delete',],
            ['id' => 49, 'title' => 'info_access',],
            ['id' => 50, 'title' => 'info_create',],
            ['id' => 51, 'title' => 'info_edit',],
            ['id' => 52, 'title' => 'info_view',],
            ['id' => 53, 'title' => 'info_delete',],
            ['id' => 54, 'title' => 'gestaoconteudo_access',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
