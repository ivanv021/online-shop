<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;
use App\User;

class Comment extends Model
{
    protected $guarded = ['id'];
    
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
}
