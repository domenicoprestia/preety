<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preet extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    protected $body;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWithLikes($query){
        $query->leftJoinSub('SELECT preet_id, SUM(liked) likes, SUM(!liked) dislikes FROM likes GROUP BY preet_id', 'likes', 'likes.preet_id', 'preets.id');
        
    }

    public function like($user = null, $liked = true){
        $this->likes()->updateOrCreate(['user_id' => $user ? $user->id : auth()->id()], ['liked' => $liked]);
    }
    public function dislike($user = null){
        return $this->like($user, false);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function isLikedBy(User $user){
        return (bool) $user->likes->where('preet_id', $this->id)->where('liked', true)->count();
    }

    public function isDislikedBy(User $user){
        return (bool) $user->likes->where('preet_id', $this->id)->where('liked', false)->count();
    }
}
