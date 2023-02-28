<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::select();
        $nombre =  $request->input('nombre');
        if($nombre!=""){
            $query->where(function ($query) use ($nombre){
                $query->where('nombre', 'like', '%'.$nombre.'%');
            });
        }
        $min =  $request->input('min');
        $max =  $request->input('max');
        if($min!="" && $max != ""){
            $query->where(function ($query) use ($min, $max){
                $query->where('precio', '>=', $min)
                ->where('precio', '<=', $max);
            });
        }

        $products = $query->orderBy('nombre', 'asc')->paginate(10);

        if($nombre!="") {
            $products->appends(['nombre' => $nombre]);
        }
        if($min!="" && $max != ""){
            $products->appends(['min' => $min, 'max' => $max]);
        }

        return view('products/index')
            ->with('products', $products)
            ->with('nombre', $nombre??'')
            ->with('min', $min??'')
            ->with('max', $max??'');
    }

    public function add()
    {
        return view('products/add');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('home');
    }
}
