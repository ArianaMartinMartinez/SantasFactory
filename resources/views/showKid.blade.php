@extends('layouts.app')
@section('content')
    <div class="containerShow">

        <div class="backBtnStyle">
            <a href="{{ route('kidshome') }}" class="backBtnStyle">Back</a>
        </div>

        <div class="container">
            <table class="styleTableShow">
                <tr>
                    <td rowspan="3" class="no-border"><img src="{{ $kids->photo }}" alt="{{ $kids->name }}"></td>
                    <td rowspan="3" class="no-border"></td>
                    <td class="nameSurnameTable" colspan="2">{{ $kids->name }} {{ $kids->surname }}</td>
                </tr>
                <tr>
                    <td>{{ $kids->age }} years old</td>
                    <td>{{ $kids->country }}</td>
                </tr>
                <tr>
                    <td>ID - {{ $kids->id }}</td>
                    @if ($kids->behaviour === 1)
                        <td class="active">Good</td>
                    @else
                        <td class="inactive">Bad</td>
                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection
