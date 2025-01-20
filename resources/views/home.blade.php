@extends('layouts.app')
@section('content')
        <section class="hero">
            <h2>HO HO HO!! Welcome To Santa's Toy Factory</h2>
        </section>

        <section class="statistics">
            <div class="containerData">
                <img src="{{asset('img/buttons/faceSanta.png')}}" alt="Santa Icon" class="iconData">
                <div class="chart">
                    <p>Test</p>
                </div>
            </div>

            <div class="containerData">
                <img src="{{asset('img/buttons/faceElf.png')}}" alt="Elf Icon" class="iconData">
                <div class="chart">
                    <p>Test</p>
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