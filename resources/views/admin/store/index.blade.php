@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route("store.create")}}" class="btn btn-primary">Nova loja</a>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Loja</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($stores as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nome}}</td>
                        <td>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{route("stores.edit", $item->id)}}" class="btn btn-success">editar</a>
                                </div>
                                <form class="col-auto" action="{{route("stores.destroy", $item->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $stores->links() !!}
        </div>
    </div>
</div>
@endsection
