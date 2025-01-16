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
                    <td class="overflow"><img src="{{$kid->photo}}" alt="{{$kid->name}}" class="imgKid"></td>
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
                    <td>
                        <button class="actionButton">
                            <a href="kids/show/{{$kid->id}}"><img src="{{asset('img/buttons/showKid.png')}}"  alt="Show Kid Button"></a>
                        </button>
                    </td>
                    <td>
                        <button class="actionButton">
                            <a href="kids/edit/{{$kid->id}}"><img src="{{asset('img/buttons/editKid.png')}}" alt="Edit Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="actionButton">
                            <a href="?action=delete&id={{$kid->id}}"><img src="{{asset('img/buttons/deleteKid.png')}}" alt="Delete Kid Button">
                        </button>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
