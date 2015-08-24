<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'following_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    }

    public function timeline()
    {
        return Tweet::whereHas('user',function($query){
            $query->where(function($query2){
                $query2->has('followers')
                       ->where('id', '=', $this->id,'or');
            });

        })->latest();
    }

    public function follow($user)
    {
        if ($this->follows()->get()->contains($user)) {
            return;
        }
        $this->following()->attach($user);
    }

    public function unfollow($user)
    {
        if (!$this->follows()->get()->contains($user)) {
            return;
        }
        $this->following()->detach($user);
    }

    public function scopeFollows($query)
    {
        return $query->whereHas('followers',function($query) {
            return $query->whereFollowerId($this->id);
        })
            ->where('id', '<>', $this->id);;
    }

    public function scopeNotFollowing($query)
    {
        return $query->whereDoesntHave('followers',function($query) {
            return $query->whereFollowerId($this->id);
        })
            ->where('id', '<>', $this->id);
    }
}
