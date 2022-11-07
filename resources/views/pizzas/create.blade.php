@extends('layout.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf <!--cross site request forgery-->
            <lable for="name">Your name: </lable>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type">
                <option value="hawaiian">hawaiian</option>
                <option value="volcano">volcano</option>
                <option value="margarita">margarita</option>
                <option value="veg supreme">veg supreme</option>
            </select>
            <select name="base" id="base">
                <option value="cheesy crust">cheesy crust</option>
                <option value="garlic crust">garlic crust</option>
                <option value="thin & crispy">thin & crispy</option>
                <option value="thick">thick</option>
            </select>
            <fieldset>
                <label for="">Extra toppings : </label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
