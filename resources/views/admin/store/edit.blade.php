@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form class="row g-3" action="{{route("stores.update", $store->id)}}" method="POST">
                @csrf
                @method("PUT")
                @include('admin.store.form')
            </form>
        </div>
    </div>
@endsection
