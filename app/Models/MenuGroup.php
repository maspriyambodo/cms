<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model {

    use HasFactory;

    protected $table = 'sys_menu_group';
    protected $primaryKey = 'id';

    public function dir_menu_group() {
        return MenuGroup::where('status',1)
                ->orderBy('order_no')
                ->get();
    }
}
