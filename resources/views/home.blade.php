@extends('layouts.app')

@section('content')

  <h1 class="font-text text-size-xl font-lighter text-grey">Bonjour {{ Auth::user()->nickname }}!</h1>

  @include('components.articles.browse')

@endsection
