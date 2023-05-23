<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommandeRequest;
use App\Models\Commande;
use App\Models\Client;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view("commandes.index", compact('commandes'));
    }
    
    
    public function create()
    {
        $clients = Client::all();
        return view('commandes.create', compact('clients'));
    }

   
    public function store(CommandeRequest $request)
    {
        // Validation passed, you can access validated data using the $request object
        $validatedData = $request->validated();
        
        // Create a new commande using the validated data
        $commande = new Commande([
            "numero" => $validatedData['numero'],
            "date_cmd" => $validatedData['date_cmd'],
            "client_id_clt" => $validatedData['client_id_clt']
        ]);
        
        // Save the commande to the database
        $commande->save();
        
        // Redirect or perform any additional actions
        return redirect()->route('commandes.index');
    }

    public function show($id){
        $commande = Commande::where('numero', $id)->get()->first();
        return view('commandes.show', compact('commande'));
    }

    
    public function edit($id)
    {
        $clients = Client::all();
        $commande  = Commande::where('numero', $id)->get()->first();
        return view('commandes.edit',['commande'=>$commande, 'clients' => $clients]);
    }

   
    public function update($id)
    {
        $commande = Commande::where('numero', $id)->get()->first();

        $commande->update([
            "numero" => request('numero'),
            "date_cmd" => request('date_cmd'),
            "client_id_clt" => request('client_id_clt')
        ]);
        return redirect(route('commandes.index'));
    }
    
    public function destroy($id)
    {
        $commande = Commande::where('numero', $id)->get()->first();
        $commande->delete();
        return redirect(route('commandes.index'));
    }
}
