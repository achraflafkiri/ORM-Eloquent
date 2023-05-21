@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="links">
                        <a href="{{ route('clients.create') }}">Create</a>
                        {{-- <a href="{{ route('clients.edit') }}">Update</a> --}}
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#ID</th>
                                <th class="text-center">First name</th>
                                <th class="text-center">Last name</th>
                                <th class="text-center">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">achraf</td>
                                <td class="text-center">Lafkiri</td>
                                <td class="text-center">Marrakech</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
