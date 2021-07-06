<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => '(退会者)',
        ]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function scopeOnlyOpen($query)
    {
        // マジックプロパティを使いたくないためboolで指定
        return $query->where('is_open',true);
    }
}
