<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    
    
    public function create()
    {
        return view('clients.create');
    }

   
    public function store(ClientRequest $request)
    {
        $validatedData = $request->validated();
        
        $client = new Client([
            'id_clt' => $validatedData['id_clt'],
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'adresse' => $validatedData['adresse'],
        ]);
        
        $client->save();
        
        return redirect()->route('clients.index');
    }
    

    public function edit(Client $client, $id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

   
    public function update(ClientRequest $request, $id)
    {
       
       $validatedData = $request->validated();

        $client = Client::find($id);

        $client->nom = $validatedData['nom'];
        $client->prenom = $validatedData['prenom'];
        $client->adresse = $validatedData['adresse'];

        $client->save();

        return redirect()->route('clients.index');
    }


    // public function destroy(Client $client)
    // {
    //     //
    // }
}
