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
            <div class="mdl-grid demo-content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
               <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                  <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
                     <use xlink:href="#piechart" mask="url(#piemask)" />
                     <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">
                        82
                        <tspan font-size="0.2" dy="-0.07">%</tspan>
                     </text>
                  </svg>
                  <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
                     <use xlink:href="#piechart" mask="url(#piemask)" />
                     <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">
                        82
                        <tspan dy="-0.07" font-size="0.2">%</tspan>
                     </text>
                  </svg>
                  <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
                     <use xlink:href="#piechart" mask="url(#piemask)" />
                     <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">
                        82
                        <tspan dy="-0.07" font-size="0.2">%</tspan>
                     </text>
                  </svg>
                  <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
                     <use xlink:href="#piechart" mask="url(#piemask)" />
                     <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">
                        82
                        <tspan dy="-0.07" font-size="0.2">%</tspan>
                     </text>
                  </svg>
               </div>
               <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                  <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
                     <use xlink:href="#chart" />
                  </svg>
                  <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
                     <use xlink:href="#chart" />
                  </svg>
               </div>
               <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
                  <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                     <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                        <h2 class="mdl-card__title-text">Updates</h2>
                     </div>
                     <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                        Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                     </div>
                     <div class="mdl-card__actions mdl-card--border">
                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
                     </div>
                  </div>
                  <div class="demo-separator mdl-cell--1-col"></div>
                  <div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
                     <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                        <h3>View options</h3>
                        <ul>
                           <li>
                              <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                              <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                              <span class="mdl-checkbox__label">Click per object</span>
                              </label>
                           </li>
                           <li>
                              <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                              <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                              <span class="mdl-checkbox__label">Views per object</span>
                              </label>
                           </li>
                           <li>
                              <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                              <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                              <span class="mdl-checkbox__label">Objects selected</span>
                              </label>
                           </li>
                           <li>
                              <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                              <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                              <span class="mdl-checkbox__label">Objects viewed</span>
                              </label>
                           </li>
                        </ul>
                     </div>
                     <div class="mdl-card__actions mdl-card--border">
                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
                        <div class="mdl-layout-spacer"></div>
                        <i class="material-icons">location_on</i>
                     </div>
                  </div>
               </div>
            </div>
         </main>
@endsection
