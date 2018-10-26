@extends('layouts.welcome')
@section('content')
<div class="android-section-title mdl-typography--display-1-color-contrast">MI CARRITO DE COMPRAS</div>
<div class="android-card-container mdl-grid text-center">
   <div class="row text-center" style="width: 500em;">
      <div class="col-md-6 text-center">
         <div class="table-responsive">
            <table class="table table-borderless">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">NAME</th>
               <th scope="col">MODELO</th>
               <th scope="col">TAMAÑO</th>
               <th scope="col">MARCA</th>
               <th scope="col">PRECIO</th>
             </tr>
           </thead>
           <tbody>
            @foreach($shopping_cart as $value)
             <tr>
               <th scope="row"><img src="{{ asset('img/sneakers/'.$value->image) }}" class="img img-responsive" style="max-width: 20vh;"></th>
               <td>{{ $value->name }}</td>
               <td>{{ $value->model->name }}</td>
               <td>{{ $value->size->name }}</td>
               <td>{{ $value->brand->name }}</td>
               <td>$ {{ number_format($value->pricing_client, 2,',', '') }}</td>               
             </tr>             
             @endforeach
             <tr>
                <td class="success" colspan="6">{{ number_format($total, 2,',', '') }}</td>
             </tr>
           </tbody>
            </table>
         </div>
      </div>
      <div class="col-md-6 text-center">
         <button class="btn btn-primary btn-lg">PAGAR AHORA <b>{{ number_format($total, 2,',', '') }}</b></button>
      </div>
   </div>      
</div>
@endsection