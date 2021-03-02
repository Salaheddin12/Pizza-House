<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pizza;

class PizzaController extends Controller
{
    public function index(){
                
        $pizzas = Pizza::all();

        return view('pizzas',['pizzas'=>$pizzas,]);

    }
}
