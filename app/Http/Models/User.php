<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'users';

    protected $fillable = ['name','username','email','password'];

    public $rules = [
        'name'     => 'required',
        'username' => 'required|unique:users',
        'password' => 'required',
        'email'    => 'required|unique:users'
    ];

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = \Hash::make($password);
    }

    public function bands() {
        return $this->belongsToMany('Band');
    }

    public function studios() {
        return $this->belongsToMany('Studio');
    }
}