@extends('layout.main')

@section('content')


<div class="center">
  <div  class="conteiner cards center">

      <div class="conteiner-card">
      
        @foreach($cards as $card)
      
            <div class="card-relaxed">
        
                <img :src="{{$card->frontimage}}" alt="img">
        
            </div>
        
            <div class="text relaxed">
                <span class="brand"> {{ $card->brand }} </span>
                <h1 class="clothes-name"> {{ $card->name }}</h1>
                <span class="solded-price"> {{ $card->price }}</span>
            </div>
      
        @endforeach
      
      </div>

    </div>
  </div>
  
@endsection


