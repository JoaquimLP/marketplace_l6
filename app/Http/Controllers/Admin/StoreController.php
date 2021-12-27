<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Http\Controllers\Controller;
use App\Models\{
    Store,
    User
};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::simplePaginate(10);

        return view('admin.store.index', compact('stores'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin.store.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data["user_id"] = 1;
        $data["slug"] = Str::slug($request->nome);;

        Store::create($data);
        flash('Loja cadastrada com sucesso')->success();
        return redirect()->route("store.index");
    }

    public function edit($id)
    {
        $store = Store::find($id);

        return view('admin.store.edit', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        $data = $request->all();

        $data["user_id"] = 1;
        $data["slug"] = Str::slug($request->nome);;

        $store->update($data);
        flash('Loja Atualizada com sucesso')->success();
        return redirect()->route("store.index");
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        flash('Loja deletada com sucesso')->success();

        return redirect()->route("store.index");
    }
}
