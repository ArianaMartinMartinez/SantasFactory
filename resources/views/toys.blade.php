@extends('layouts.app')
@section('content')

<div class="backButtonDiv">

    <a href="{{ route('santashome') }}" class="backBtnStyle">Back</a>
</div>
<div class="newFilterButtonDiv">

    <a href="{{route('toyscreate')}}" class="newFilterBtnStyle">New Toy</a>
    <a href="" class="newFilterBtnStyle">Filter by</a>

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
                    <td>{{$toy->age_range}}</td>
                    <td>{{$toy->description}}</td>
                    <td>
                        <button class="actionButton">
                            <a href="toys/show/{{$toy->id}}"><img src="{{asset('img/buttons/showKid.png')}}" alt="Show Kid Button">
                        </button>
                    </td>
                    <td>
                        <button class="actionButton">
                            <a href="toys/edit/{{$toy->id}}"><img src="{{asset('img/buttons/editKid.png')}}" alt="Edit Kid Button">
                        </button>
                    </td>
                    <td>
                         <form action="{{route('toysdestroy',$toy->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="actionButton"><img src="{{asset('img/buttons/deleteKid.png')}}" alt="Delete Toy Button"></button>
                         </form>
                        </td>
                </tr>
            @endforeach
        <tb>
    </table>
</div>
@endsection
