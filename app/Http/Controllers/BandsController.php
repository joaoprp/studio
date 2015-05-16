<?php namespace App\Http\Controllers;

use App\Http\Models\Band;

class BandsController extends Controller
{
    public $baseModel;

    //
    public function __construct(Band $model) {
        $this->baseModel = $model;
    }
}
