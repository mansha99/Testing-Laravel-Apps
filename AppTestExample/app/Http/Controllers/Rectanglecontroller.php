<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Input;

class Rectanglecontroller extends Controller {

    public function index() {
        $rectangle = new \App\Models\Rectangle();
        $rectangle->setLength(Input::get("length", 0));
        $rectangle->setBreadth(Input::get("breadth", 0));
        return view('rectangle.index')
                        ->withLength($rectangle->getLength())
                        ->withBreadth($rectangle->getBreadth())
                        ->withArea($rectangle->area())
                        ->withPerimeter($rectangle->perimeter());
    }

}
