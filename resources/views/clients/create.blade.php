@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Create new client</h4>
                        <a href="{{ route('clients.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
                    </div>

                    <form class="forms-sample mt-3" method="POST" action="{{ route('clients.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="id_clt">ID client</label>
                            <input type="text" class="form-control" name="id_clt" placeholder="Enter ID of client {unique}"
                                   value="{{ old('id_clt') }}">
                            @error('id_clt')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="nom" placeholder="Enter first name"
                                   value="{{ old('nom') }}">
                            @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Enter last name"
                                   value="{{ old('prenom') }}">
                            @error('prenom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="adresse" placeholder="Enter address"
                                   value="{{ old('adresse') }}">
                            @error('adresse')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-success me-2">Create new client</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
