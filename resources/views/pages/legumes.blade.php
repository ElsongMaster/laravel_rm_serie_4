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
        @if (strlen($data->name)>=5)
                <tr class="bg-primary text-light">
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->quantite}} Kg</td>
      </tr>  
        @else
                <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->quantite}} Kg</td>
      </tr>          
        @endif

      @endforeach

  </tbody>
</table>   
@endsection