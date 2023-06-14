@extends('Layout.layout')

@section('content')
    <div class="container mt-5">
        <h3>Register</h3>
        <form action="post-register" method="post">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif
            <div>
                <label for="username">Name</label>
                <input type="text" id="name" class="form-control mb-3 mt-2" name="name" required autofocus>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control mb-3 mt-2" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control mb-3 mt-2" name="password" required>
            </div>
            <div>
                <label for="password">Password Confirmation</label>
                <input type="password" id="password_confirmation" class="form-control mb-3 mt-2" name="password_confirmation" required
                    autofocus>
            </div>
            <div>
                <label for="level">Role</label>
                <select name="level" id="level" class="form-control mb-3 mt-2" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Sign Up</button>
        </form>
    </div>
@endsection
