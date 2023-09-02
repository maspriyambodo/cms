<?php

namespace App\Http\Controllers;

use \App\Helpers\Bodo;

class Metronic extends Controller {

    public function index() {
//        $dt_menu = Bodo::menus();
//        $dt_grupMenu = Bodo::groupMenu();
//        $allmenu = Bodo::allMenus();
//        $dt_menuUnique = [];
//        foreach ($dt_menu as $key => $menu) {
//            $dt_menuUnique[] = $dt_menu[$key]->group_menu;
//            $dt_menuUnique2[] = array_unique($dt_menuUnique);
//            if (isset($dt_grupMenu[$key]) && $dt_menuUnique2[$key] == $dt_grupMenu[$key]->id) {
//                
//            }
//        }
//        die;
//        $data = [
//            'contoh_data' => 'wopque'
//        ];
        return view('Dashboard');
    }
}
