<div class="row">
  <div class="col-md-6">
    <h1 class="font-text text-size-m font-light text-grey">Mon profil <a class="float-right tool-icon" href="{{ Route('profiles.edit', [Auth::id()]) }}"><img src="{{ asset('icons/pencil.svg') }}" alt="connectez-vous" width="15px"></a></h1>
    <table class="table table-unbordered">
          <tr>
            <th>
              <h3 class="font-text text-size-s">Pseudo</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $user->nickname }}</h1>
            </td>
          </tr>

          <tr>
            <th>
              <h3 class="font-text text-size-s">Prénom</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $user->profile->first_name }}</h1>
            </td>
          </tr>

          <tr>
            <th>
              <h3 class="font-text text-size-s">Nom</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $user->profile->last_name }}</h1>
            </td>
          </tr>

          <tr>
            <th>
              <h3 class="font-text text-size-s">Localisation</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $user->profile->location }}</h1>
            </td>
          </tr>

          <tr>
            <th>
              <h3 class="font-text text-size-s">Email</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ $user->email }}</h1>
            </td>
          </tr>

          <tr>
            <th>
              <h3 class="font-text text-size-s">Date de naissance</h3>
            </th>
            <td>
              <h1 class="font-text text-size-s">{{ date("d/m/Y", strtotime($user->profile->birth_date)) }}</h1>
            </td>
          </tr>
    </table>
  </div>
  <div class="col-md-6">

  </div>
</div>
