<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public static function getList() {
        $result = DB::table('articles')
        ->select('articles.title', 'articles.content', 'articles.id', 'articles.note')
        ->where('is_deleted', '=', 0)
        ->paginate(3);
        return $result;
    }
}
