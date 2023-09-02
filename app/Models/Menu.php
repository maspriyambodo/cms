<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    use HasFactory;

    protected $table = 'sys_menu';
    protected $primaryKey = 'id';

    public function childs() {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }
}
