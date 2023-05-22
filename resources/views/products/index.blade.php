@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="links">
                        <a href="{{ route('products.create') }}" class="btn btn-inverse-info btn-fw">Create</a>
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">designation</th>
                                <th class="text-center">prix</th>
                                <th class="text-center">qte_stock</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($products as $prd)
                               <tr>
                                <td class="text-center">{{ $prd->id_prd }}</td>
                                <td class="text-center">{{ $prd->designation }}</td>
                                <td class="text-center">{{ $prd->prix }}</td>
                                <td class="text-center">{{ $prd->qte_stock }}</td>
                                <td class="text-center">
                                    <a href="{{ route('products.edit', $prd->id_prd) }}" class="btn btn-inverse-success btn-icon">
                                        <span class="mdi mdi-pencil"></span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('products.destroy', $prd->id_prd) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-inverse-danger btn-icon">
                                            <span class="mdi mdi-trash-can-outline"></span>
                                        </button>
                                    </form>
                                </td>
                               </tr>
                           @empty
                           <tr>
                            <td colspan="6" class="text-center">No products found.</td>
                        </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
