@extends('layout.layout')

<style>
    .form_container {
        max-width: 500px;
        width: 90%;
        padding: 2rem;
    }
</style>

<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #eee">
    <div class="bg-white p-5 form_container">
        <h2 class="mb-4 text-center text-primary"> Register Blog</h2>
        <form method="post" action="{{route('register.post')}}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="" class="fw-bold mb-1">Name</label>
                <input type="text" name="name" placeholder="Input your Name" class="form-control">
                @if ($errors->has('name'))
                    <span class="text-danger fs-6">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="fw-bold mb-1">Email</label>
                <input type="email" name="email" placeholder="Input your Email" class="form-control">
                @if ($errors->has('email'))
                    <span class="text-danger fs-6">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="fw-bold mb-1">Password</label>
                <input type="password" name="password" placeholder="Input your Password" class="form-control">
                @if ($errors->has('password'))
                    <span class="text-danger fs-6">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="fw-bold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
            </div>
            <button type="submit" class="btn bg-primary text-white w-100">Register</button>
        </form>
        <a href="{{route('login.view')}}" class="d-flex justify-content-center">Already have an account? Login</a>
    </div>
</div>