<?php

// namespace App\Http\Controllers\Product;
namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;


abstract class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Product::orderBy('name', 'ASC')->paginate(10);
        // $this->data['data'] = $data;
        // return view('admin.product.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        //     if(Product::create($request->all())) {
        //         Session::flash('success', "Berhasil Simpan");
        //     } else{
        //         Session::flash('error', "Gagal Simpan");
        //     }
        //     return redirect()->route('product.index');
        // } catch (\Throwable $th) {
        //     Session::flash('error', 'Periksa Kembali isian');
        //     return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = Product::findOrFail(Crypt::decrypt($id));
        // $this->data['data'] = $data;
        // return view('admin.product.edit', $this->data);
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
        // try {
        //     $data = Product::findOrFail(Crypt::decrypt($id));
        //     if($data->update($request->all())) {
        //         Session::flash('success', "Berhasil Simpan");
        //     }else{
        //         Session::flash('error', "Gagal Simpan");
        //     }
        //     return redirect()->route('product.index');
        // } catch (\Throwable $th) {
        //     Session::flash('error', 'Periksa Kembali isian');
        //     return redirect()->back();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Product::findOrFail(Crypt::decrypt($id));
        // if ($data->delete()) {
        //         Session::flash('success', "Berhasil Hapus");
        // } else {
        //         Session::flash('error', "Gagal Delete");
        // }
        //     return redirect()->route('product.index');
    }
}
