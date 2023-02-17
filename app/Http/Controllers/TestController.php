<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $data['data'] = Products::all();
        return view('products.show', $data);
    }

    public function store(Request $request)
    {
        return Products::create($request->all());
    }

    public function show(Request $request)
    {
        return view('add_products');
    }

    public function test()
    {

        $camel = camel_case('foo_bar');
        print_r($camel);
        /* "<br/>";
        print_r($path); */
        die;
    }
}
