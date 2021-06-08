<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategoriesList() {
        
        return DB::table($this->table)
            ->select(['id', 'title', 'description']) 
            ->get();
    }

    public function getCategory($id) {

        return DB::table($this->table)
            ->select(['id', 'title', 'description'])
            ->where(['id' => $id])
            ->first();
    }
}
