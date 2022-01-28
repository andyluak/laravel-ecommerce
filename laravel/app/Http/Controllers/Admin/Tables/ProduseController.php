<?php

namespace App\Http\Controllers\Admin\Tables;

use App\Http\Controllers\Controller;
use App\Models\Produs;
use Illuminate\Http\Request;

class ProduseController extends Controller
{
    public function index()
    {
        $produse = Produs::all();
        return view('admin.produse.index', compact('produse'));
    }

    public function create()
    {
        return view('admin.produse.create');
    }

    public function adauga( Request $req ) {
        $produs = new Produs();
        $produs->produs_nume = $req->input('produs_nume');
        $produs->produs_pret = $req->input('produs_pret');
        if( $req-> hasFile('produs_img') ) {
            $file = $req->file('produs_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/produse/produs_img', $filename);
            $produs->produs_img = $filename;
        }
        $produs->produs_descriere = $req->input('produs_descriere');
        $produs->produs_descrierecompl = $req->input('produs_descrierecompl');
        $produs->produs_stare = $req->input('produs_stare');
        $produs->produs_oferta = $req->input('produs_oferta');
        $produs->produs_noutati = $req->input('produs_noutati');

        $produs->save();
        return redirect('/produse')->with( 'success', 'Produs adaugat cu succes!' );
    }

    public function edit( $id ) {
        $produs = Produs::find($id);
        return view('admin.produse.edit', compact('produs'));
    }

    public function modifica( Request $req, $id ) {
        $produs = Produs::find($id);
        $produs->produs_nume = $req->input('produs_nume');
        $produs->produs_pret = $req->input('produs_pret');
        if( $req-> hasFile('produs_img') ) {
            $file = $req->file('produs_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/produse/produs_img', $filename);
            $produs->produs_img = $filename;
        }
        $produs->produs_descriere = $req->input('produs_descriere');
        $produs->produs_descrierecompl = $req->input('produs_descrierecompl');
        $produs->produs_stare = $req->input('produs_stare');
        $produs->produs_oferta = $req->input('produs_oferta');
        $produs->produs_noutati = $req->input('produs_noutati');

        $produs->update();
        return redirect('/produse')->with( 'success', 'Produs modificat cu succes!' );
    }

    public function sterge( $id ) {
        $produs = Produs::find($id);
        $produs->delete();
        return redirect('/produse')->with( 'success', 'Produs sters cu succes!' );
    }
}
