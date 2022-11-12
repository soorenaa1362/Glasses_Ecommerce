@extends('layouts.master')

@section('content')

    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="{{ route('user.login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection




