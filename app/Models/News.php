<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getNewsList() {

        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select(['news.*', 'categories.title as category_title'])
            ->get();
    }

    public function getNews($id) {

        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'created_at'])
            ->where(['id' => $id])
            ->first();
    }
}
