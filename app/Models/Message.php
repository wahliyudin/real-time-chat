<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chat_id',
        'group_id',
        'type',
        'content',
        'sent_at',
        'delivered_at',
        'seen_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
