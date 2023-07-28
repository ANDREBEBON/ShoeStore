<?php

namespace App\Http\Controllers;

use App\Models\perusahan;
use App\Models\produk;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use illuminate\response;
use PhpParser\Node\Stmt\Return_;

class ProdukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    use WithPagination;


    protected $updatesQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $perusahans = perusahan::latest()->paginate(4);

        if (!empty($search)) {
            $produks = produk::where('produks.nama_produk', 'like', '%'.$search.'%')
            ->orWhere('produks.harga_produk', 'like', '%'.$search.'%')
            ->latest()->paginate(8);
        }else {
            $produks = produk::latest()->paginate(8);
        }
        return view('product-index')->with([
            'search' => $search,
            'produks' => $produks,
            'perusahans' => $perusahans
        ]);
    }

    public function show($id)
    {
        $produks = produk::find($id);
        
        $perusahans = perusahan::latest()->paginate(1);
        return view('product-details', compact('produks'))->with([
            'produk' => $produks,
            'perusahans' => $perusahans
        ]);
    }

    public function pesanan(Request $request){
        $request->validate([
            'jumlah_pesanan' => 'required|integer|min:1'
    ]);

    $produks = $request->input('produk_id');

    $produks = produk::findOrfail($produks);

    $jumlah_pesanan = $request->input('jumlah_pesanan');

    return redirect()->route('produk.show', $produks)->with('success', 'Pesanan anda berhasil ditambahkan ke keranjang.');
    }

}