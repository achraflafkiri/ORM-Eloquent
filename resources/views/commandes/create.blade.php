@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Create new commande</h4>
                        <a href="{{ route('commandes.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
                    </div>

                    <form class="forms-sample mt-3" method="POST" action="{{ route('commandes.store') }}">
                        @csrf

                        <div class="form-group">
                            <select class="form-select" name="client_id_clt" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @forelse ($clients as $clt)
                                <option value="{{ $clt->id_clt }}">{{ $clt->nom }}</option>
                                @empty
                                <option value="1" @readonly(true)>No clients added yet</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="text" class="form-control" name="numero" placeholder="Enter numero"
                                   value="{{ old('numero') }}">
                            @error('numero')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_cmd">date</label>
                            <input type="text" class="form-control" name="date_cmd" placeholder="Enter date"
                                   value="{{ old('date_cmd') }}">
                            @error('date_cmd')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-gradient-success me-2">Create new commande</button>
                        <a class="btn btn-light" href="{{ route('commandes.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
