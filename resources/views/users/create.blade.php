@extends('layouts.app')
  
@section('user', 'Create user')
  
@section('contents')
    <h1 class="mb-0">Add User</h1>
    <hr />
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="message" class="form-control" placeholder="message">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="phone">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection