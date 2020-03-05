@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
</head>
<body>
    <h1>Liste d'information</h1>
    <ul>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Home</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($info as $item)
              <tr>
                <td>{{ $item->created_at}}</td>
                <td>{{ $item->field1}}</td>
                if({{ $item->field1 == 0}}){
                  <td>non</td>
                }else{
                <td>Chez sois</td>
                }
              </tr>
              @endforeach
            </tbody>
          </table>
    </ul>
</body>
</html>
@endsection