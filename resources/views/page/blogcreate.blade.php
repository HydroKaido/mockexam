@extends('layout.layout')
<div>
    <form method="post" action="{{route('create.post')}}">
        @csrf
        @method('POST')
        <label for="">Title</label>
        <input type="text" name="title" class="form-control">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control">
        <label for="">Mood</label>
        <input type="text" name="mood" class="form-control">
        <label for="">Author</label>
        <input type="text"  name="author" class="form-control">
        <button type="submit">Save</button>
    </form>
</div>

