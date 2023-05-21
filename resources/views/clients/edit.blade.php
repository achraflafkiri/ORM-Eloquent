@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Edit client</h4>
                        <a href="{{ route('clients.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
                    </div>

                    <form class="forms-sample mt-3" method="POST" action="{{ route('clients.update', $client->id_clt) }}">
                        @csrf
                        @method("PUT")

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="nom" placeholder="Enter first name"
                                   value="{{ $client->nom }}">
                            @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Enter last name"
                                   value="{{ $client->prenom }}">
                            @error('prenom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="adresse" placeholder="Enter address"
                                   value="{{ $client->adresse }}">
                            @error('adresse')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-success me-2">Update client</button>
                        <a class="btn btn-light" href="{{ route('clients.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
