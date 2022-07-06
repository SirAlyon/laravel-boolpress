<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Reply extends Model
{
    protected $fillable = ['message', 'message_id'];
    
    public function replies()
    {
        return $this->hasMany(Message::class);
    }
}
