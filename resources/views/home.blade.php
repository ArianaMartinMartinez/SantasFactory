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
                            <li id ="goodChildrenData">Good Children: {{$goodChildren}}</li>
                            <li id = "badChildrenData">Bad Children: {{$badChildren}}</li>
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
                            <li id="data0To3">0-3 : {{$allToysData[0] + 3}}</li>
                            <li id="data3To7">3-7 : {{$allToysData[1] + 3}}</li>
                            <li id="data7To12">7-12 : {{$allToysData[2] + 3}}</li>
                            <li id="data12To16">12-16 : {{$allToysData[3] + 3}}</li>
                            <li id="data16To18">16-18 : {{$allToysData[4] + 3}}</li>
                            <li id="dataMore18">+18 : {{$allToysData[5] }}</li>
                        </ul>
                        <p>Total: {{$allToysData[0] + $allToysData[1] + $allToysData[2] + $allToysData[3] + $allToysData[4] + $allToysData[5] + 3}} </p>
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