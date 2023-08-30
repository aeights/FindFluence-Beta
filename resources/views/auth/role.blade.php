@extends('layouts.app')

@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="card m-auto">
            <div class="card-header">
                Brand
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="{{ route('register') }}" method="GET">
                  @csrf
                  <input type="hidden" name="role" value="brand">
                  <button type="submit" class="btn btn-primary">Register as brand</button>
                </form>
            </div>
        </div>
        <div class="card m-auto">
            <div class="card-header">
                Influencer
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="{{ route('register') }}" method="GET">
                  @csrf
                  <input type="hidden" name="role" value="influencer">
                  <button type="submit" class="btn btn-primary">Register as influencer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
