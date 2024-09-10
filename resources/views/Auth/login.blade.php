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
        <h2 class="mb-4 text-center text-primary"> Login Blog</h2>
        <form method="post" action="{{ route('login.post')}}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="" class="fw-bold mb-1">Email</label>
                <input type="email" name="email" placeholder="input your email" class="form-control">
                
            </div>
            <div class="mb-3 mt-4">
                <label for="" class="fw-bold mb-1">Password</label>
                <input type="password" name="password" placeholder="password" class="form-control">
            </div>
            <button type="submit" class="btn bg-primary text-white w-100">Login</button>
        </form>
        <a href="{{route('register.view')}}" class="d-flex justify-content-center">Already have an account? Login</a>
    </div>
</div>