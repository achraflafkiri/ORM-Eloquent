@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="links">
                        <a href="{{ route('clients.create') }}" class="btn btn-inverse-info btn-fw">Create</a>
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">First name</th>
                                <th class="text-center">Last name</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Updated at</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $clt)
                                <tr>
                                    <td class="text-center">{{ $clt->id_clt }}</td>
                                    <td class="text-center">{{ $clt->nom }} 
                                        <a href="clients/{{ $clt->id_clt }}">
                                        <span class="mdi mdi-eye-circle-outline"></span>
                                        </a> 
                                    </td>
                                    <td class="text-center">{{ $clt->prenom }}</td>
                                    <td class="text-center">{{ $clt->adresse }}</td>
                                    <td class="text-center">{{ $clt->updated_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('clients.edit', $clt->id_clt) }}" class="btn btn-inverse-success btn-icon">
                                            <span class="mdi mdi-pencil"></span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('clients.destroy', $clt->id_clt) }}" method="POST" style="display: inline;">
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
                                    <td colspan="7" class="text-center">No clients found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
