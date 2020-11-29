<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    // check for best replies
    public function isBest()
    {
        return $this->id === $this->conversation->best_reply_id;
    }


    //fetch replies for a conversation
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    
    // fetch user replies
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
