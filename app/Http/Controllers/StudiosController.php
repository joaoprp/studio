<?php namespace App\Http\Controllers;

use App\Http\Models\Studio;

class StudiosController extends Controller
{
    public $baseModel;

    //
    public function __construct(Studio $model) {
        $this->baseModel = $model;
    }
}
