<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $baseModel;
    //
    public function index() {
        return response()->json($this->baseModel->all());
    }

    public function view($id) {
        return response()->json($this->baseModel->find($id));
    }

    public function create(Request $request) {
        $this->validate($request,$this->baseModel->rules);

        $this->baseModel->fill($request->all());

        if($this->baseModel->save()) {
            return response()->json(['msg' => 'Saved successfuly']);
        } else {
            return response()->json(['msg' => 'Oops, something happened']);
        }
    }

    public function update(Request $request,$id) {
        $this->baseModel = $this->baseModel->find($id);

        $this->baseModel->fill($request->all());

        if($this->baseModel->save()) {
            return response()->json(['msg' => 'Saved successfuly']);
        } else {
            return response()->json(['msg' => 'Oops, something happened']);
        }
    }
}
