<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // テーブル名
    protected $table = 'games';

    // 可変項目
    protected $fillable =
    [
        'user_id', 'name', 'good_level', 'number', 'time_required', 'count', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
