@extends('layouts.dash')

@section('css')
<meta charset="utf-8">
      

@endsection

@section('content')
 <main class="mdl-layout__content mdl-color--grey-100">
       <div class="containter">
        
           <div class="col-md-8">
             <div class="card">
               <div class="card-header">
                <h1> Sizes</h1>
               </div>
               <div class="card-body">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                     {!! Form::open(['route' => 'sizes.store']) !!}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('name', 'Size´s name') }}
               {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Aqui va el nombre', 'required' => true])}}                           
                        </div><br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        {{ Form::label('available', 'Available') }}
               {{ Form::select('available', ['0' => 'Inactive', '1' => 'Active'], '1', ['class' => 'form-control']) }}
                        </div><br>
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
                                 <th>available</th>
                                 <th>user</th>
                                 
                                
                                 <th>Delete</th>
                                 <th>Update</th>
                               </tr>
                             </thead>
                             <tbody>
                     @foreach ($sizes as $element)
                              <tr>
                           <td>{{ $element->id }} </td>
                           <td>{{ $element->name }} </td>
                           <td>{{ $element->available }} </td>
                           <td>{{ $element->user->name }} </td>
                           <td> @include('forms.delete-size')</td>
                            <td>@include('forms.update-size')</td>
                              </tr>
                               
                     @endforeach
                             </tbody>
                           </table> 
                                  

                        

                         
                       </div>                    
                    
                  </div>                  
     </div>


            
</main>
@endsection
