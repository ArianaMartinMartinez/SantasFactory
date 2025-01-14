@extends('layouts.app')
@section('content')

<div class="backButtonDiv">
    <button class="backButton">
        <a href="{{ route('santashome') }}" class="backBtn">Back</a>
    </button>
</div>
<div class="newFilterButton">
    <button class="newKidButton">
        <a href="">New Kid</a>
    </button>
    <button class="filterButton">
        <a href="">Filter by</a>
    </button>
</div>

<div class="tableDiv">
    <table class="tableKid">
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
                            <span>Good</span>
                        @else
                            <span>Bad</span>
                        @endif
                    </td>
                    {{-- <td><a class="crudBtn" href="kids/show/{{$kid->id}}">👁️</a></td>
                    <td><a class="crudBtn"href="kids/edit/{{$kid->id}}">✏️</a></td>
                    <td><a class="crudBtn" href="?action=delete&id={{$kid->id}}">❌</a></td> --}}
                    <td>
                        <button class="actionButton">
                            <img src="{{asset('img/buttons/showKid.png')}}" alt="Show Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="actionButton">
                             <img src="{{asset('img/buttons/editKid.png')}}" alt="Edit Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="actionButton">
                            <img src="{{asset('img/buttons/deleteKid.png')}}" alt="Delete Kid Button">
                        </button>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
