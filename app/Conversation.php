<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    // set best reply conversation
    public function setBestReply(Replies $reply)
    {
        $this->best_reply_id = $reply->id;
        $this->save();
    }

    //get the creator of a conversation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Replies::class);
    }
}
