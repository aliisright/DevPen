@extends('layouts.app')

@section('content')

  @include('components.profiles.profile_header')

  <section class="container mx-3">
    <div class="row">
      <div class="col-md-6">
        <h1 class="font-text text-size-m font-light text-grey">Mon profil</h1>
        <table class="table table-unbordered">
          <tr>
            <th>
              <h3 class="font-text text-size-s">Pseudo</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $userName }}</h1>
            </td>
          </tr>
          <tr>
            <th>
              <h3 class="font-text text-size-s">Prénom</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">Ali</h1>
            </td>
          </tr>
          <tr>
            <th>
              <h3 class="font-text text-size-s">Nom</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">Hasan</h1>
            </td>
          </tr>
          <tr>
            <th>
              <h3 class="font-text text-size-s">Date de naissance</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">19/06/1991</h1>
            </td>
          </tr>
          <tr>
            <th>
              <h3 class="font-text text-size-s">Ville</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">Paris</h1>
            </td>
          </tr>
        </table>
      </div>


      <div class="col-md-6">

      </div>
    </div>
  </section>


@endsection
