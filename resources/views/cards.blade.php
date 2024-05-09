@extends('layout.main')

@section('content')


<div class="center">
  <div  class="conteiner cards center">
    <div class="conteiner-card">

      <h1>SARA</h1>
    
      @foreach($cards as $card)
    
        <div>
    
          <img :src="{{$card->frontimage}}" alt="img">
    
        </div>
    
        <div>
          <span class="brand"> {{ $card->brand }} </span>
            <h1 class="clothes-name"> {{ $card->name }}</h1>
          <span class="solded-price"> {{ $card->price }}</span>
        </div>
    
      @endforeach

    </div>
  </div>
</div>

@endsection


