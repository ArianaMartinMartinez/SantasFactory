@extends('layouts.app')
@section('content')

<div class="backButtonDiv">

    <a href="{{ route('santashome') }}" class="backBtnStyle">Back</a>
</div>
<div class="newFilterButtonDiv">

    <a href="" class="backBtnStyle">New Kid</a>
    <a href="" class="backBtnStyle">Filter by</a>

</div>
<div class="tableDiv">
    <table class="tableStyle">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Minimun age</th>
                <th>Description</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tb>
            @foreach ($toys as $toy)
                <tr>
                    <td class="overflow"><img src="{{$toy->photo}}" alt="{{$toy->name}}" class="imgToy"></td>
                    <td>{{$toy->name}}</td>
                    <td>+{{$toy->min_age}}</td>
                    <td>{{$toy->description}}</td>
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
                    {{-- <td>
                        <a class="crudBtn" href="toys/show/{{$toy->id}}">👀</a>
                        <a class="crudBtn" href="toys/create">🆕</a>
                        <a class="crudBtn"href="toys/edit/{{$toy->id}}">📝</a>
                        <a class="crudBtn" href="?action=delete&id={{$toy->id}}">🗑️</a></td> --}}
                </tr>
            @endforeach
        <tb>
    </table>
</div>
@endsection
