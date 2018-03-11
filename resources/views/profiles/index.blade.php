@extends('layouts.app')

@section('content')

  @include('components.profiles.profile_header')

  <section class="container mx-3">
    @if(Auth::id() == $user->id)
      @if(!isset($user->profile))
        @include('components.profiles.create')
      @else
        @include('components.profiles.profile_information')
      @endif
    @else
      @if(!isset($user->profile))
        <h3 class="text-size-l font-light text-center">:( {{ $user->nickname }} n'a pas encore rempli son profil!</h3>
      @else
        @include('components.profiles.profile_information')
      @endif
    @endif
  </section>


@endsection
