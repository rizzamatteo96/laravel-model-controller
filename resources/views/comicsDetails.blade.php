@extends('layouts.app')
@section('title','Comics detail')

@section('content')

{{-- @dd($cardsData) --}}

<main>   
  <div class="content">
    <!-- inizio jumbotron -->
    <div class="jumbo"></div>
    <!-- fine jumbotron -->

    <div class="container">

      <img src="{{$cardsData->thumb}}" alt="">

      <h2>{{$cardsData->title}}</h2>
      
			<div class="check-shop">
				U.S. Price: ${{$cardsData->price}}
      </div>
			
			<p>{{$cardsData->description}}</p>

			<div>
				<h3>Specs</h3>
				<p>Series: {{$cardsData->series}}</p>
				<p>U.S. Price: ${{$cardsData->price}}</p>
				<p>On Sale Date: {{$cardsData->sale_date}}</p>
			</div>

    </div>  
  </div>
  
  <div class="items-shop">
    <div class="container">
    <ul>
      @foreach ($shopItems as $item)
      <li>
        <img src="{{asset('img/' . $item['img'])}}" alt="{{asset($item['alt'])}}">
        <span> {{$item['text']}} </span>
      </li>
      @endforeach
    </ul>
    </div>
  </div>
</main>
@endsection