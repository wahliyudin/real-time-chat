<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id'
    ];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function userGroups()
    {
        return $this->hasMany(UserGroup::class);
    }
}
