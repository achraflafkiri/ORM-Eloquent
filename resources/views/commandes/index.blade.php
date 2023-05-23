@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="links">
                        <a href="{{ route('commandes.create') }}" class="btn btn-inverse-info btn-fw">Create</a>
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">Numero</th>
                                <th class="text-center">Date_cmd</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($commandes as $cmd)
                               <tr>
                                    <td class="text-center">{{ $cmd->numero }}</td>
                                    <td class="text-center">{{ $cmd->date_cmd }}</td>
                                    <td class="text-center">{{ $cmd->client_id_clt }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('commandes.edit', $cmd->numero) }}" class="btn btn-inverse-success btn-icon">
                                            <span class="mdi mdi-pencil"></span>
                                        </a>
                                        
                                        <form action="{{ route('commandes.destroy', $cmd->numero) }}" method="POST" style="display: inline;">
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
                                <td colspan="6" class="text-center">No commandes found.</td>
                            </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
