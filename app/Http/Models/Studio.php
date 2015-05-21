<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model {
    protected $table = 'studios';

    protected $fillable = ['name','address','city','state','country','phone','email'];

    public $rules = [
        'name'    => 'required',
        'address' => 'required',
        'phone'   => 'required',
        'email'   => 'required|unique:studios'
    ];

    public function users() {
        return $this->belongsToMany('User');
    }
}