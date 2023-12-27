<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserMenuActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_menu_actions')->delete();
        
        \DB::table('user_menu_actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 3,
                'menu_action_id' => 1,
                'parent_id' => NULL,
                'name' => 'Create',
                'bn_name' => NULL,
                'system_name' => 'Create',
                'route_name' => 'user.create',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 3,
                'menu_action_id' => 2,
                'parent_id' => NULL,
                'name' => 'Edit',
                'bn_name' => NULL,
                'system_name' => 'Edit',
                'route_name' => 'user.edit',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 3,
                'menu_action_id' => 3,
                'parent_id' => NULL,
                'name' => 'Delete',
                'bn_name' => NULL,
                'system_name' => 'Delete',
                'route_name' => 'user.destroy',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 4,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 3,
                'menu_action_id' => 4,
                'parent_id' => NULL,
                'name' => 'View',
                'bn_name' => NULL,
                'system_name' => 'View',
                'route_name' => 'user.show',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 0,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 3,
                'menu_action_id' => 8,
                'parent_id' => NULL,
                'name' => 'Print',
                'bn_name' => NULL,
                'system_name' => 'Print',
                'route_name' => 'user.print',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 5,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 1,
                'status' => 0,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 3,
                'menu_action_id' => NULL,
                'parent_id' => NULL,
                'name' => 'Deleted Index',
                'bn_name' => NULL,
                'system_name' => 'Deleted Index',
                'route_name' => 'user.deleted_list',
                'type' => 'action',
                'slug' => 'deleted_list',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 3,
                'menu_action_id' => 9,
                'parent_id' => 6,
                'name' => 'Restore',
                'bn_name' => NULL,
                'system_name' => 'Restore',
                'route_name' => 'user.restore',
                'type' => 'action',
                'slug' => 'restore',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 5,
                'menu_action_id' => 1,
                'parent_id' => NULL,
                'name' => 'Create',
                'bn_name' => NULL,
                'system_name' => 'Create',
                'route_name' => 'role.create',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 5,
                'menu_action_id' => 2,
                'parent_id' => NULL,
                'name' => 'Edit',
                'bn_name' => NULL,
                'system_name' => 'Edit',
                'route_name' => 'role.edit',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 5,
                'menu_action_id' => 3,
                'parent_id' => NULL,
                'name' => 'Delete',
                'bn_name' => NULL,
                'system_name' => 'Delete',
                'route_name' => 'role.destroy',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 4,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 5,
                'menu_action_id' => 4,
                'parent_id' => NULL,
                'name' => 'View',
                'bn_name' => NULL,
                'system_name' => 'View',
                'route_name' => 'role.show',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 0,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 5,
                'menu_action_id' => 8,
                'parent_id' => NULL,
                'name' => 'Print',
                'bn_name' => NULL,
                'system_name' => 'Print',
                'route_name' => 'role.print',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 5,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 1,
                'status' => 0,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 5,
                'menu_action_id' => NULL,
                'parent_id' => NULL,
                'name' => 'Deleted Index',
                'bn_name' => NULL,
                'system_name' => 'Deleted Index',
                'route_name' => 'role.deleted_list',
                'type' => 'action',
                'slug' => 'deleted_list',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 5,
                'menu_action_id' => 9,
                'parent_id' => 13,
                'name' => 'Restore',
                'bn_name' => NULL,
                'system_name' => 'Restore',
                'route_name' => 'role.restore',
                'type' => 'action',
                'slug' => 'restore',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 5,
                'menu_action_id' => 5,
                'parent_id' => NULL,
                'name' => 'Permission',
                'bn_name' => NULL,
                'system_name' => 'Permission',
                'route_name' => 'role.permission',
                'type' => 'action',
                'slug' => 'permission',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-03-19 18:17:22',
                'updated_at' => '2023-04-05 06:48:45',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 171,
                'menu_id' => 26,
                'menu_action_id' => 1,
                'parent_id' => NULL,
                'name' => 'Create',
                'bn_name' => NULL,
                'system_name' => 'Create',
                'route_name' => 'menu.create',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 172,
                'menu_id' => 26,
                'menu_action_id' => 2,
                'parent_id' => NULL,
                'name' => 'Edit',
                'bn_name' => NULL,
                'system_name' => 'Edit',
                'route_name' => 'menu.edit',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 173,
                'menu_id' => 26,
                'menu_action_id' => 3,
                'parent_id' => NULL,
                'name' => 'Delete',
                'bn_name' => NULL,
                'system_name' => 'Delete',
                'route_name' => 'menu.destroy',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 4,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 174,
                'menu_id' => 26,
                'menu_action_id' => 4,
                'parent_id' => NULL,
                'name' => 'View',
                'bn_name' => NULL,
                'system_name' => 'View',
                'route_name' => 'menu.show',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 175,
                'menu_id' => 26,
                'menu_action_id' => NULL,
                'parent_id' => NULL,
                'name' => 'Trash',
                'bn_name' => NULL,
                'system_name' => 'Trash',
                'route_name' => 'menu.deleted_list',
                'type' => 'tab',
                'slug' => 'deleted_list',
                'class' => NULL,
                'order_by' => 6,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 176,
                'menu_id' => 26,
                'menu_action_id' => 9,
                'parent_id' => 175,
                'name' => 'Restore',
                'bn_name' => NULL,
                'system_name' => 'Restore',
                'route_name' => 'menu.restore',
                'type' => 'action',
                'slug' => 'restore',
                'class' => NULL,
                'order_by' => 7,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 177,
                'menu_id' => 26,
                'menu_action_id' => 3,
                'parent_id' => 175,
                'name' => 'Delete Permanently',
                'bn_name' => NULL,
                'system_name' => 'Delete Permanently',
                'route_name' => 'menu.force_destroy',
                'type' => 'action',
                'slug' => 'force_destroy',
                'class' => NULL,
                'order_by' => 8,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-05 06:48:48',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 178,
                'menu_id' => 65,
                'menu_action_id' => 4,
                'parent_id' => NULL,
                'name' => 'View',
                'bn_name' => NULL,
                'system_name' => 'View',
                'route_name' => 'admission_info.show',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-06-27 09:20:56',
                'updated_at' => '2023-06-27 09:20:56',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 179,
                'menu_id' => 66,
                'menu_action_id' => 1,
                'parent_id' => NULL,
                'name' => 'Create',
                'bn_name' => NULL,
                'system_name' => 'Create',
                'route_name' => 'vice_principal_message.create',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'show_in_table' => 0,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-07-16 05:09:11',
                'updated_at' => '2023-07-16 05:09:11',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 180,
                'menu_id' => 66,
                'menu_action_id' => 2,
                'parent_id' => NULL,
                'name' => 'Edit',
                'bn_name' => NULL,
                'system_name' => 'Edit',
                'route_name' => 'vice_principal_message.edit',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-07-16 05:09:11',
                'updated_at' => '2023-07-16 05:09:11',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 181,
                'menu_id' => 66,
                'menu_action_id' => 3,
                'parent_id' => NULL,
                'name' => 'Delete',
                'bn_name' => NULL,
                'system_name' => 'Delete',
                'route_name' => 'vice_principal_message.destroy',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 4,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-07-16 05:09:11',
                'updated_at' => '2023-07-16 05:09:11',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 182,
                'menu_id' => 66,
                'menu_action_id' => 4,
                'parent_id' => NULL,
                'name' => 'View',
                'bn_name' => NULL,
                'system_name' => 'View',
                'route_name' => 'vice_principal_message.show',
                'type' => 'action',
                'slug' => NULL,
                'class' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'show_in_table' => 1,
                'new_tab' => 0,
                'status' => 1,
                'created_at' => '2023-07-16 05:09:12',
                'updated_at' => '2023-07-16 05:09:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}