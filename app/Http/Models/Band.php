<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model {
    protected $table = 'bands';

    protected $fillable = ['name','genre'];

    public $rules = [
        'name'    => 'required'
    ];

    public function users() {
        return $this->belongsToMany('User');
    }
}