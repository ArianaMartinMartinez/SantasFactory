@extends('layouts.app')
@section('content')
    <div class="containerShow">
        <div class="backBtnStyle">
            <a href="{{ route('toyshome') }}" class="backBtnStyle">Back</a>
        </div>

        <div class="containerToys">
            <table class="styleTableShowToys">
                <tbody>
                    <tr>
                        <td rowspan="3" class="no-border"><img src="{{ $toys->photo }}" alt="{{ $toys->name }}"></td>
                        <td rowspan="3" class="no-border"></td>
                        <td class="nameTable">{{ $toys->name }}</td>
                        <td class="toysAge">+{{ $toys->min_age }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $toys->description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
