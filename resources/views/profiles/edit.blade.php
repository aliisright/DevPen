@extends('layouts.app')

@section('content')

  @include('components.profiles.profile_header')

  <section class="container mx-3">
    @include('components.profiles.edit')
  </section>


@endsection
