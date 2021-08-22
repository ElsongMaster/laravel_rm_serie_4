@extends('template.main')




@section('content')
<div class="container-fluid justify-content-center align-items-center h-100 w-100">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$fruit->id}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Nom: {{$fruit->name}}</h6>
        <p class="card-text">Quantite: {{$fruit->quantite}}</p>
        <a href="{{route('fruits')}}" class="btn btn-warning">Retour</a>
      </div>
    </div>
</div>
@endsection