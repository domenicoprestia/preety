<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatarAttribute($value)
    {
        if($value != null){
        return 'storage/'.$value;
        }
        else{
        return 'storage/avatars/default.jpg';
        }
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function timeline()
    {
        $friends = $this->follows->pluck('id');
        return Preet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)->withLikes()->latest()->get();
    }

    public function likedpreets(){
        $preets = $this->timeline();
        $likes = $this->likes;
        $likedprets = [];
        foreach($likes as $like){
            if($like->liked == true){
                foreach($preets as $preet){
                    if($like->preet_id == $preet->id){
                        array_push($likedprets, $preet);                    }
                }
            }
        }
        return $likedprets;
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class)->latest();
    }
    public function schedules_today()
    {
        $d=new Carbon();
        $schedules = $this->hasMany(Schedule::class)->where('day', $d->format('l'))->latest();
        return $schedules;
    }
    public function preets()
    {
        return $this->hasMany(Preet::class)->withLikes()->latest();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
    public function following(User $user)
    {
        return $this->follows->contains($user);
    }
    public function path($append = ''){

        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}
