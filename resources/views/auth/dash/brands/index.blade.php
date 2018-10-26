@extends('layouts.dash')

@section('css')
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title', 'Dashboard Sneakers')</title>
      <!-- Add to homescreen for Chrome on Android -->
      <meta name="mobile-web-app-capable" content="yes">
      <link rel="icon" sizes="192x192" href="{{ url('https://getmdl.io/templates/dashboard/images/android-desktop.png') }}">
      <!-- Add to homescreen for Safari on iOS -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Material Design Lite">
      <link rel="apple-touch-icon-precomposed" href="{{ url('https://getmdl.io/templates/dashboard/images/ios-desktop.png') }}">
      <!-- Tile icon for Win8 (144x144 + tile color) -->
      <meta name="msapplication-TileImage" content="{{ url('https://getmdl.io/templates/dashboard/images/touch/ms-touch-icon-144x144-precomposed.png') }}">
      <meta name="msapplication-TileColor" content="#3372DF">
      <link rel="shortcut icon" href="{{ url('https://getmdl.io/templates/dashboard/images/favicon.png') }}">
      <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
      <!--
         <link rel="canonical" href="http://www.example.com/">
         -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">      
      <link rel="stylesheet" href="{{ asset('css/dash.css') }}">  

      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
   rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/css/material-dashboard.min.css?v=2.0.2') }}">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/demo/demo.css') }}">

@endsection

@section('content')
 <main class="mdl-layout__content mdl-color--grey-100">
       <div class="containter">
        
           <div class="col-md-8">
             <div class="card">
               <div class="card-header">
                <h1> Brands</h1>
               </div>
               <div class="card-body">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                     {!! Form::open(['route' => 'brands.store']) !!}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('name', 'Brand´s name') }}
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
               <td>delete</td>
               <td>update</td>
             </tr>
           </thead>
           <tbody>
   @foreach ($brands as $element)
            <tr>
         <td>{{ $element->id }} </td>
         <td>{{ $element->name }} </td>
         <td>{{ $element->available }} </td>
         <td>{{ $element->user->name }} </td>
          <td>@include('forms.delete-brand')</td>
         <td> @include('forms.update-brand')</td>
            </tr>
             
   @endforeach
           </tbody>
         </table> 
         
</div>


            
</main>
@endsection
