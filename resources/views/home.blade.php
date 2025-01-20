@extends('layouts.app')
@section('content')
        <section class="hero">
            <h2>HO HO HO!! Welcome To Santa's Toy Factory</h2>
        </section>

        <section class="statistics">
            <div class="containerDataChart">
                <img src="{{asset('img/buttons/faceSanta.png')}}" alt="Santa Icon" class="iconData">
                <div class="containerLegendChart">
                    <div id="chart1">
                    </div>
                    <div class="leyendChart">
                        <ul class="left-list">
                            <li>Good Children: {{$goodChildren}}</li>
                            <li>Bad Children: {{$badChildren}}</li>
                        </ul>
                        <p>Total: {{$goodChildren + $badChildren}}</p>
                    </div>
                </div>
            </div>

            <div class="containerDataChart">
                <img src="{{asset('img/buttons/faceElf.png')}}" alt="Elf Icon" class="iconData">
                <div class="containerLegendChart">
                    <div id="chart2"></div>
                    <div class="leyendChart">
                        <ul class="right-list">
                            <li>0-3:</li>
                            <li>3-7:</li>
                            <li>7-12:</li>
                            <li>12-16:</li>
                            <li>16-18:</li>
                            <li>+18:</li>
                        </ul>
                        <p>Total:</p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="products">
            <h3>TOP TOYS</h3>
            <div class="productsGrid">
                <div class="productTower">
                    <img src="{{ $topToys[1]->photo }}" alt="Toy top 2" class="topToy">
                    <img src="{{asset("img/buttons/secondTower.png")}}" alt="Second Tower" class="tower">
                </div>
                <div class="productTower">
                    <img src="{{ $topToys[0]->photo }}" alt="Toy top 1" class="topToy">
                    <img src="{{asset("img/buttons/firstTower.png")}}" alt="First Tower" class="tower">
                </div>
                <div class="productTower">
                    <img src="{{ $topToys[2]->photo }}" alt="Toy top 3" class="topToy">
                    <img src="{{asset("img/buttons/thirdTower.png")}}" alt="Third Tower" class="tower">
                </div>
            </div>
        </section>
@endsection