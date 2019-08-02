<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phonenumber', 'accounttype', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot(){
    parent::boot();

    static::created(function ($user){
      if($user->accounttype=='Intern'){
        $user->profile()->create([

        ]);
      }elseif ($user->accounttype=='Company') {
        // code...
        $user->companyprofile()->create([

        ]);
      }


    });
  }

    public function profile(){
      return $this->hasOne(Profile::class);
    }

    public function companyprofile(){
      return $this->hasOne(CompanyProfile::class);
    }

    public function dashboard(){
      return $this->hasOne(Dashboard::class);
    }

    public function verifyUser()
    {
        return $this->hasOne(VerifyUser::class);
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function application()
    {
        return $this->hasMany(Application::class);
    }

    public function test()
    {
        return $this->hasMany(Test::class);
        //->withTrashed();
    }
    public function interview()
    {
        return $this->hasMany(Interview::class);
        //->withTrashed();
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
        //->withTrashed();
    }

    public function taketest()
    {
        return $this->hasMany(TakeTest::class);
        //->withTrashed();
    }
}
