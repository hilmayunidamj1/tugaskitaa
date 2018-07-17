<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	

use App\hutang;


class hutangController extends Controller
{
    public function index()
    {
    	$data = hutang::all();
    	return view('hutang.daftar')->with('data', $data);
    }

    public function create ()
    {
    	return view('hutang.buat');
    }
    public function store(Request $request){
    	hutang::create($request->all());
    return redirect('hutang');
    }

    public function show($id){
    	$data = hutang::find($id);
    	return view ('hutang.detail_hutang')->with('data', $data);
    }
    public function edit($id){
    	$data = hutang::find($id);
    	return view ('hutang.edit_hutang')->with('data', $data);
    }
    public function update(Request $request, $id){
    	hutang::find($id)->update($request->all());
    	return redirect('hutang');
    }

    public function destroy($id){
    	hutang::find($id)->delete();
    	 return redirect('hutang');
    }

}
