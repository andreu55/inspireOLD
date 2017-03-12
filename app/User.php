<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // The attributes that are mass assignable.
    protected $fillable = [ 'name', 'email', 'password', ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [ 'password', 'remember_token', ];

    public function inputs($tipo_id) { return $this->hasMany('App\Input')->where('tipo_id', $tipo_id)->get(); }

    public function esAdmin() {
      if ($this->id == 1 || $this->id == 2) { return 1; }
      else { return 0; }
    }
}
