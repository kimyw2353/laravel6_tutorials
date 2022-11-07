<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Support\Facades\Log;

class PizzaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $pizzas = Pizza ::latest() -> get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id)
    {
        //$pizza = Pizza::find($id); -> 존재하지 않는 컬럼 조회 시, 에러페이지 그대로 나옴
        $pizza = Pizza ::findOrFail($id); // -> " 에러페이지 출력하지않고 404 페이지 출력
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        Log::info($pizza);

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);

        $pizza->delete();

        return redirect('/pizzas');
    }
}
