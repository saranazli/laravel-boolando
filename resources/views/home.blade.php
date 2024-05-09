@extends('layout.main')

@section('content')


<div class="center">
  <div  class="conteiner cards center">
    @foreach($cards as $card)
      <div class="conteiner-card">
        <div>
    
          <img src="{{ asset('img/' . $card['frontImage']) }}" alt="img">
    
        </div>
    
        <div>
          <span class="brand"> {{ $card['brand'] }} </span>
            <h1 class="clothes-name"> {{ $card['name'] }}</h1>
          <span class="solded-price"> {{ $card['price'] }}</span>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection


