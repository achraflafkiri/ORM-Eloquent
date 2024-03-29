@extends("layouts.app")

@section("content")

    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            </div>
                <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
            <div>
                <h1>Name: {{ $client->nom }} {{  $client->prenom }}</h1>
                <p class="text-dark">Address: {{ $client->adresse }}</p>
                <p class="text-dark">Updated at: {{ $client->updated_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="{{ route('clients.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
            </div>
            </div>
                    <h3>List of commands</h3>
                       <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">Numero</th>
                                <th class="text-center">date_cmd</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($commandes as $com)
                            <tr>
                                <td class="text-center">{{ $com->numero }}</td>
                                <td class="text-center">{{ $com->date_cmd }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center">No commandes found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection