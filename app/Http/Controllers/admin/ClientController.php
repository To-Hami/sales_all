<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{

    public function data(){
        $clients = Client::select();

        return DataTables::of($clients)
            ->addColumn('actions', 'admin.clients.data_table.actions')
            ->rawColumns(['actions'])
            ->toJson();
    }
    public function index()
    {
        $clients = Client::paginate(4);
        return view('admin.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(ClientRequest $request)
    {
        Client::create($request->validated());
        session()->flash('success', __('تمت اضافة البيانات بنجاح'));

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit',compact('client'));
    }

    public function update(ClientRequest $request ,Client $client)
    {
        $client->update($request->validated());
        session()->flash('success', __('تم تعديل البيانات بنجاح'));

        return redirect()->route('admin.clients.index');

    }


    public function bulkDelete(){

    }

    public function destroy(Client $client)
    {
        $client->delete();
        session()->flash('success', __('تم حزف البيانات بنجاح'));

        return redirect()->route('admin.clients.index');

    }

    public function archive(){
        $clients = Client::onlyTrashed()->paginate(5);
        return view('admin.clients.archive',compact('clients'));
    }
}
