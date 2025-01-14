@extends('layouts.app')
@section('content')

<div class="backBtnContainer">
        <a href="{{ route('santashome') }}" class="backBtn">🔙</a>
</div>

<div class="tableKid">
    <h2 class="form-title">Kids</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Full name</th>
                <th>Age</th>
                <th>Country</th>
                <th>Behaviour</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
                <tr>
                    <td><img src="{{$kid->photo}}" alt="{{$kid->name}}"></td>
                    <td>{{$kid->name}} {{$kid->surname}}</td>
                    <td>{{$kid->age}}</td>
                    <td>{{$kid->country}}</td>
                    <td>
                        @if ($kid->behaviour === 1)
                            <span class="active">Good</span>
                        @else
                            <span class="inactive">Bad</span>
                        @endif
                    </td>
                    {{-- <td><a class="crudBtn" href="kids/show/{{$kid->id}}">👁️</a></td>
                    <td><a class="crudBtn"href="kids/edit/{{$kid->id}}">✏️</a></td>
                    <td><a class="crudBtn" href="?action=delete&id={{$kid->id}}">❌</a></td> --}}
                    <td>
                        <button class="showButton">
                            <img src="{{asset('img/buttons/showKid.png')}}" alt="Show Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="editButton">
                             <img src="{{asset('img/buttons/editKid.png')}}" alt="Edit Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="deleteButton">
                            <img src="{{asset('img/buttons/deleteKid.png')}}" alt="Delete Kid Button">
                        </button>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
