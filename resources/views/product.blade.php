@extends('layouts.welcome')
@section('content')
<div class="android-section-title mdl-typography--display-1-color-contrast">{{ $products->brand->name }}</div>
<div class="android-card-container mdl-grid">
   <div class="row">
      <div class="col-md-6">
        
            <img class="img" src="{{asset('/img/sneakers/'.$products->image) }}" style="max-width: 100vh;" alt="Card image cap">
             
      </div>      
      <div class="col-md-6">
         <p>
            <h2 >{{ $products->name }}</h2>
         </p>
         <p>
            {{$products->meta_description}}            
         </p>
         <p>
            ${{$products->pricing_client}}
            
         </p>
         <div class="p">

         {!! Form::open(['route' => ['in_shopping_cart.store'], 'class' => 'formaddcard'])  !!}
            <input type="hidden" name="product_id" value="{{ $products->id }}">
            <button type="submit" class="btn btn-primary btn-lg">Añadir al carrito</button>
         {!! Form::close() !!}         
         </div>
      </div>
   </div>      
</div>
@endsection