@extends('layouts.dash')

@section('css')


@endsection

@section('content')
 <main class="mdl-layout__content mdl-color--grey-100">
       <div class="containter">
        
           <div class="col-md-8">
             <div class="card">
               <div class="card-header">
                <h1> products</h1>
               </div>
               <div class="card-body">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                     {!! Form::open(['route' => 'products.store', 'files' => true]) !!}
                        {{-- name --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('name', 'Brand´s name') }}
                         {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Aqui va el nombre', 'required' => true])}}                           
                        </div>
                                      {{-- identificador interno del producto --}}

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('sku', 'Sku') }}
               {{ Form::text('sku', null, ['class' => 'form-control', 'placeholder' => 'id interno', 'required' => true])}}                           
                        </div>
                        {{-- slug --}}

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('slug', 'Slug') }}
                  {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'id interno', 'required' => true])}}                           
                        </div>

                                                {{-- pricing_client --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('pricing_client', 'precio al cliente') }}
                         {{ Form::text('pricing_client', null, ['class' => 'form-control', 'placeholder' => '$', 'required' => true])}}                           
                        </div>
                                                {{-- pricing_stock --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('pricing_stock', 'precio stock') }}
                         {{ Form::text('pricing_stock', null, ['class' => 'form-control', 'placeholder' => '$', 'required' => true])}}                           
                        </div>

                                                {{-- description --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('description', 'descripcion') }}
                         {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Escriba la descripcion del producto', 'required' => true])}}
                       </div>

                                               {{-- meta_description --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('meta_description', 'meta description') }}
                         {{ Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'descripcion', 'required' => true])}}                           
                        </div>

                                                {{-- imagen --}} 
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('image', 'Ingresa la imagen') }}<br>
                         {{ Form::file('image', null, ['class' => 'form-control', 'placeholder' => 'Aqui va la imageN', 'required' => true])}}                      
                        </div>
                                          {{-- available --}} 
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {{ Form::label('promotion', 'promotion') }}
               {{ Form::select('promotion', ['0' => 'Inactive', '1' => 'Active'], '1', ['class' => 'form-control']) }}
                        </div>

                                               {{-- Top --}}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('Top', 'Top') }}
                         {{ Form::text('Top', null, ['class' => 'form-control', 'placeholder' => 'descripcion', 'required' => true])}}                           
                        </div>

                                            

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {{ Form::label('model_id', 'model') }}
                        {{ Form::select('model_id', $model,[] ,['class' => 'form-control this','placeholder', 'placeholder' => 'Selecciona modelo']) }}
                        </div>

                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {{ Form::label('brand_id', 'brand') }}
                        {{ Form::select('brand_id', $brand,[] ,['class' => 'form-control this','placeholder', 'placeholder' => 'Selecciona marca']) }}
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {{ Form::label('size_id', 'size') }}
                        {{ Form::select('size_id', $size,[] ,['class' => 'form-control this','placeholder', 'placeholder' => 'Selecciona tamaño']) }}
                        </div>


                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::submit('Save Me!', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']) }}
                        </div>
                     {!! Form::close() !!}                     
               </div>
             </div>
           </div>
         
       </div>
       @endsection
 @section('section2')          
<div class="mdl-cell mdl-cell--12-col table-responsive">
                 <table class="table table-striped">
                             <thead>
                               <tr>
                                 <th>id</th>
                                 <th>name</th>
                                 <th>sku</th>
                                 <th>slug</th>
                                 <th>Price to Client</th>
                                 <th>Stock Price</th>
                                 <th>description</th>
                                 <th>meta description</th>
                                 <th>image</th>
                                 <th>available</th>
                                 <th>top</th>
                                 <th>promotion</th>
                                 <th>user</th>
                                 <th>Size</th>
                                 <th>Brand</th>
                                 <th>Model</th>
                                 <th>Delete</th>
                                 <th>Update</th>
                               </tr>
                             </thead>
                             <tbody>
                     @foreach ($products as $element)
                              <tr>
                           <td>{{ $element->id }} </td>
                           <td>{{ $element->name }} </td>
                           <td>{{ $element->sku }} </td>
                           <td>{{ $element->slug }} </td>
                           <td>{{ $element->pricing_client }} </td>
                           <td>{{ $element->pricing_stock }} </td>
                           <td>{{ $element->description }} </td>
                           <td>{{ $element->meta_description }} </td>
                           <td>{{ $element->image }} </td>
                           <td>{{ $element->available }} </td>
                           <td>{{ $element->top }} </td>
                           <td>{{ $element->promotion }} </td>
                           <td>{{ $element->user->name }} </td>
                           <td>{{ $element->size->name }} </td>
                           <td>{{ $element->brand->name }} </td>
                           <td>{{ $element->model->name }} </td>
                           <td>@include('forms.delete-product')</td>
                           <td>@include('forms.update-product')</td>
                           
                           
                           
                          

                              </tr>
                     @endforeach
                               
                                  
</div>


            
</main>
@endsection
