@extends('layouts.app')

@section('content')

  <h1 class="font-text text-size-xl font-lighter text-grey">Bonjour {{ Auth::user()->nickname }}!</h1>
  <a class="link dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><li class="font-text list-inline-item text-grey mx-2">Logout
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form></li></a>

  @include('components.articles.browse')

@endsection
