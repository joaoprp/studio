<?php namespace App\Http\Controllers;

use App\Http\Models\User;

class UsersController extends Controller
{
    public $baseModel;

    //
    public function __construct(User $model) {
        $this->baseModel = $model;
    }
}
