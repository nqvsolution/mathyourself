@extends('template')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/desktop/index.style.css') }}">
@endsection
@section('body-content')
  <div id="items-content">
      <div class="row">

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/ds10.png') }}">
            </a> 
          </div>
        </div>

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/ds11.jpg') }}">
            </a>
          </div>
        </div>

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/ds12.png') }}">
            </a>  
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/hh10.png') }}">
            </a> 
          </div>
        </div>

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/hh11.png') }}">
            </a>
          </div>
        </div>

        <div class="col-4">
          <div class="items-choice">
            <a href="#">
              <img src="{{ asset('images/hh12.png') }}">
            </a>  
          </div>
        </div>

      </div>

      
  </div>
@endsection
@section('js-bottom')
  <script type="text/javascript" src="{{ asset('js/desktop/index.js') }}"></script>
@endsection
