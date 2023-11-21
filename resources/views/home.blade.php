@extends('layouts.main')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <td>{{$train->Azienda}}</td>
            <td>{{$train->Stazione_di_partenza}}</td>
            <td>{{$train->Stazione_di_arrivo}}</td>
            <td>{{$train->Orario_di_partenza}}</td>
            <td>{{$train->Orario_di_arrivo}}</td>
            <td>{{$train->Codice_treno}}</td>
            <td>{{$train->Numero_carrozze}}</td>
            <td>{{$train->In_orario}}</td>
            <td>{{$train->Cancellato}}</td>
        </tr>

        @endforeach

    </tbody>
  </table>


@endsection
