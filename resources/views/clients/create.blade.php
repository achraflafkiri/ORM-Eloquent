@extends("layouts.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new client</h4>
                    <div class="links">
                        <a href="{{ route('clients.index') }}">Back</a>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('clients.store') }}">
                              <div class="form-group">
                                <label for="id_clt">ID client</label>
                                <input type="text" class="form-control" name="id_clt" placeholder="Enter ID of client {unique}">
                              </div>
                              <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="nom" placeholder="Enter first name">
                              </div>
                              <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Enter last name">
                              </div>
                              <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" class="form-control" name="adresse" placeholder="Enter address">
                              </div>
                              <button type="submit" class="btn btn-gradient-success me-2">Create new client</button>
                              <button class="btn btn-light">Cancel</button>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
