@extends('Layout.layout')

@section('content')
    <div class="container mt-5">
        <h3>Login</h3>
        <form action="post-login" method="POST">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif
            <div>
                {{-- <label for="username">Email</label> --}}
                <input type="email" id="email" class="form-control mb-4 mt-2" placeholder="Email" name="email" required autofocus>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control mb-4 mt-2" placeholder="Password" name="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </form>
        <p>Belum mempunyai akun? <a href="register">daftar</a></p>
    </div>
    
@endsection