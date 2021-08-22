@extends('template.main')




@section('content')

<div class="container-fluid justify-content-center align-items-center h-100 w-100">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">ID:{{$legume->id}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Nom:{{$legume->name}}</h6>
      <p class="card-text">Quantite:{{$legume->quantite}} Kg</p>
      <a href="{{route('légumes')}}" class="btn btn-warning">Retour</a>
    </div>
  </div>
</div>

@endsection