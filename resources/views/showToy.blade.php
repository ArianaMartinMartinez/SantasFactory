@extends('layouts.app')
@section('content')
    <div class="containerShow">
        <div class="backButtonDiv">
            <a href="{{ route('toyshome') }}" class="backBtnStyle">Back</a>
        </div>

    <div class="tableToy">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Minimun Age</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tb>
                <tr>
                    <td>{{$toys->id}}</td>
                    <td>{{$toys->name}}</td>
                    <td><img src="{{$toys->photo}}" alt="{{$toys->name}}"></td>
                    <td>{{$toys->description}}</td>
                    <td>+{{$toys->min_age}}</td>
                    <td>{{$toys->created_at->format('d/m/y')}}</td>
                </tr>
            <tb>
        </table>
    </div>
@endsection
