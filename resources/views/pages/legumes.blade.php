@extends('template.main')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Quantite</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $data)
          
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->quantite}} Kg</td>
      </tr>
      @endforeach

  </tbody>
</table>   
@endsection