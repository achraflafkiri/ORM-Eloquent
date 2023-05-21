@extends("layouts.auth")

@section("form")
    <form class="pt-3" action="{{ route('register.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
            @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="confirmpassword" placeholder="Confirm Password">
            @error('confirmpassword')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
        </div>
    </form>
@endsection
