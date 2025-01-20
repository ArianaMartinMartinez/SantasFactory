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
                            <li>Good Children:</li>
                            <li>Bad Children:</li>
                        </ul>
                        <p>Total:</p>
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
                    <p>Second Toy</p>
                    <img src="{{asset("img/buttons/secondTower.png")}}" alt="Second Tower">
                </div>
                <div class="productTower">
                    <p>First Toy</p>
                    <img src="{{asset("img/buttons/firstTower.png")}}" alt="First Tower">
                </div>
                <div class="productTower">
                    <p>Third Toy</p>
                    <img src="{{asset("img/buttons/thirdTower.png")}}" alt="Third Tower">
                </div>
            </div>
        </section>
@endsection