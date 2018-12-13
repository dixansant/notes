<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu();
        $menu->family= 'menu.main';
        $menu->title = 'Admin';
        $menu->grant_name = 'MENU_ADMIN';
        $menu->active = true;
        $menu->position = 1;
        $menu->save();

        $menu = new Menu();
        $menu->family= 'menu.main';
        $menu->title = 'Menus';
        $menu->linkref = 'route';
        $menu->href = 'admin.menu';
        $menu->grant_name = 'MENU_ADMIN';
        $menu->active = true;
        $menu->parent = 1;
        $menu->position = 2;
        $menu->save();


        $menu = new Menu();
        $menu->family= 'menu.main';
        $menu->title = 'Grants';
        $menu->linkref = 'route';
        $menu->href = 'admin.grants';
        $menu->grant_name = 'MENU_ADMIN';
        $menu->active = true;
        $menu->parent = 1;
        $menu->position = 3;
        $menu->save();

        $menu = new Menu();
        $menu->family= 'menu.main';
        $menu->title = 'Opciones';
        $menu->grant_name = 'MENU_ADMIN';
        $menu->active = true;
        $menu->position = 4;
        $menu->save();



    }
}
