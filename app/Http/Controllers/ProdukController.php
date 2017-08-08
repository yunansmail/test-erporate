<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProdukRequest;
use App\Produk;
use App\Kategori;
use App\Subkategori;
use App\Cart;
use Session;
use Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }
        Produk::create($input);
        Session::flash('pesan_flash', 'Data Produk berhasil disimpan');
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        
        $kategori = Kategori::select('nama_kategori')->where('id', $produk->nama_kategori)->get()->toArray();
        $subkategori = Subkategori::select('nama_subkategori')->where('id', $produk->nama_subkategori)->get()->toArray();
        return view('produk.show', compact('produk', 'kategori', 'subkategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, Produk $produk)
    {
        $input = $request->all();
        if($request->hasFile('foto')) {
            $this->hapusFoto($produk);
            $input['foto'] = $this->uploadFoto($request);
        }
        $produk->update($input);
        Session::flash('pesan_flash', 'Data produk berhasil diupdate');
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $this->hapusFoto($produk);
        $produk->delete();
        Session::flash('pesan_flash', 'Data Produk berhasil dihapus');
        Session::flash('penting', true);
        return redirect('produk');
    }

    public function findSubCatName(Request $request) {
        $datasubkat = Subkategori::select('nama_subkategori', 'id')->where('id_kategori', $request->id)->take(100)->get(); //$request->id didapat dari id option yg terpilih
        return response()->json($datasubkat); //kirim $datakab ke ajax success
    }

    private function uploadFoto(ProdukRequest $request) {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        if($request->file('foto')->isValid()) {
            $foto_name = date('YmdHis').".$ext";
            $upload_path = 'fotoupload';
            $request->file('foto')->move($upload_path, $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function hapusFoto(Produk $produk) {
        $exist = Storage::disk('foto')->exists($produk->foto);
        if(isset($produk->foto) && $exist) {
            $delete = Storage::disk('foto')->delete($produk->foto);
            if($delete) {
                return true;
            }
            return false;
        }
    }

    public function getAddToCart(Request $request, $id)
    {
        $produk = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produk, $produk->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('produk.shoppingCart');
    }
}
