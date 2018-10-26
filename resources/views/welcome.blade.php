@extends('layouts.welcome')

@section('content')
    		<div class="android-more-section">
               <div class="android-section-title mdl-typography--display-1-color-contrast">Sneakers</div>
               <div class="android-card-container mdl-grid">
                  @foreach( $products as $element )
                  
                  <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                  
                     <div class="mdl-card__media">
                       <a href="{{ route('show.pro', $element->id) }}">
                        <img class="card-img-top" src="{{asset('/img/sneakers/'.$element->image) }}" alt="Card image cap">
                        </a>
                     </div>
                     <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">{{ $element->name }}</h4>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">{{$element->description}}
                        </span>
                     </div>
                     <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">${{$element->pricing_client}}
                        </span>
                     </div>
                     <div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase mdl-button btn-lg" href="">
                       
                        <i class="material-icons  ">
                        add_shopping_cart
                        </i>
                        </a>
                     </div>
                  </div>
                     @endforeach
                  
                 
               </div>
               
            </div>
@endsection