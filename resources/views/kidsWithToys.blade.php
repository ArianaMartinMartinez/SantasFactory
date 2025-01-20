@extends('layouts.app')
@section('content')
    <div>


        <div class="buttonSection">
            <a href="{{ route('santashome') }}" class="backBtnStyle">Back</a>

            <a href="{{ route('assignToys') }}" class="backBtnStyle">Assign gifts</a>
        </div>

        <div class="kidsWithToysSection">
                @foreach ($kids as $kid)
                    <div class="kidWithToyCard">
                        <div class="kidCard">
                            <a class="link" href="{{route('kidsshow', $kid->id)}}"><img src="{{$kid->photo}}" alt=""></a>
                            <div class="kidName">
                                <h2>{{$kid->name}}</h2>
                                <h2>{{$kid->surname}}</h2>
                                @if ($kid->behaviour == 1)
                                    <p>Good<p> 
                                @endif
                                @if($kid->behaviour == 0)
                                    <p>Bad</p>
                                @endif
                            </div>
                        </div>
                        <div class="toyCard">
                            @foreach ($kid->toys as $toy)
                                <a class="link" href="{{route('toysshow', $toy->id)}}"><img src="{{$toy->photo}}" alt=""></a>
                            @endforeach
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection