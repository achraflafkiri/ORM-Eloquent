@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Create new product</h4>
                        <a href="{{ route('products.index') }}" class="btn btn-inverse-info btn-fw">Back</a>
                    </div>

                    <form class="forms-sample mt-3" method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="id_prd">ID product</label>
                            <input type="text" class="form-control" name="id_prd" placeholder="Enter id_prd"
                                   value="{{ old('id_prd') }}">
                            @error('id_prd')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" name="designation" placeholder="Enter designation"
                                   value="{{ old('designation') }}">
                            @error('designation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" name="prix" placeholder="Enter prix"
                                   value="{{ old('prix') }}">
                            @error('prix')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="qte_stock">qte_stock</label>
                            <input type="text" class="form-control" name="qte_stock" placeholder="Enter qte_stock"
                                   value="{{ old('qte_stock') }}">
                            @error('qte_stock')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-success me-2">Create new product</button>
                        <a class="btn btn-light" href="{{ route('products.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
