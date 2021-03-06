<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $products = [
        ['id' => 1, 'prod_nome' => 'Notebooks'],
        ['id' => 2, 'prod_nome' => 'Keyboard']
    ];

    public function __construct()
    {
        $products = session('products');    
        if(!isset($products))
        session(['product'=> $this->products]);            
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
        $products = session('product');
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $products = session('product');
        if(count($products) == 0){
            $id = 1;
            $prod_nome = $request->prod_nome;
            $dados = ['id'=>$id,'prod_nome' => $prod_nome];
            $products[] = $dados;
            session(['product' => $products]);
            return redirect()->route('products.index');
        }
        else{
            $id = end($products)['id'] + 1;
            $prod_nome = $request->prod_nome;
            $dados = ['id'=>$id,'prod_nome' => $prod_nome];
            $products[] = $dados;
            session(['product' => $products]);
            return redirect()->route('products.index');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = session('product');
        $index = $this->getIndex($id,$products);
        $product = $products[$index];
        return view('products.info',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = session('product');
        $index = $this->getIndex($id,$products);
        $product = $products[$index];
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = session('product');
        $index = $this->getIndex($id,$products);
        $products[$index]['prod_nome'] = $request->prod_nome;
        session(['product' => $products]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = session('product');    
        $index = $this->getIndex($id,$products);        
        array_splice($products,$index,1);
        session(['product' => $products]);
        return redirect()->route('products.index');
    }

    public function getIndex($id,$products){
        $ids = array_column($products,'id');
        $index = array_search($id,$ids); 
        return $index;
    }
}
