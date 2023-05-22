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
        // Validation passed, you can access validated data using the $request object
        $validatedData = $request->validated();
        
        // Create a new client using the validated data
        $client = new Client([
            'id_clt' => $validatedData['id_clt'],
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'adresse' => $validatedData['adresse'],
        ]);
        
        // Save the client to the database
        $client->save();
        
        // Redirect or perform any additional actions
        return redirect()->route('clients.index');
    }

    public function show($id){
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    
    public function edit(Client $client, $id)
    {
        $client  = Client::find($id);
        return view('clients.edit', compact('client'));
    }

   
    public function update(Request $request, $id)
    {
        $client = Client::where('id_clt', $id)->get()->first();
        $client->update([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'adresse' => request('adresse')
        ]);
        return redirect(route('clients.index'));
    }
    
    public function destroy($id)
    {
        $client = Client::where('id_clt', $id)->first();
        $client->delete();
        return redirect(route('clients.index'));
    }
    
}
