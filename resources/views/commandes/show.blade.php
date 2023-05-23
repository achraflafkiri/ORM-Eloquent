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
                <h1>Commande number: {{ $commande->numero }} </h1>
                <p>Date of commande: {{ $commande->date_cmd }}</p>
            </div>
            <div>
                <a href="{{ route('commandes.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
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
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">01-11-2028</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">12-12-2026</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">12-02-2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection