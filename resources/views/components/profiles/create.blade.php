<form method="post" action="{{ route('profiles.store') }}">
  <p class="font-text text-size-l font-lighter text-grey">Créez votre profil!</p>

  @if($errors->any())
    <div>
      <ul class="list-unstyled alert alert-danger">
        @foreach($errors->all() as $error)
          <li>
            {{ $error }}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(Session::get('success'))
    <div class="">
      <p class="py-0 alert alert-success">{{ Session::get('success') }}</p>
    </div>
  @endif

  <div class="form-group">
    <label for="first_name">Prénom</label>
    <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" placeholder="votre prénom">
  </div>

  <div class="form-group">
    <label for="last_name">Nom</label>
    <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="last_name" placeholder="votre nom">
  </div>

  <div class="form-group">
    <label for="birth_date">Date de naissance</label>
    <input type="date" name="birth_date" class="form-control {{ $errors->has('birth_date') ? 'is-invalid' : '' }}" id="birth_date" placeholder="votre date de naissance">
  </div>

  <div class="form-group">
    <label for="location">Localisation</label>
    <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" id="location" placeholder="votre localisation (ville, pays)">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" rows="10">Votre bio ici...</textarea>
  </div>

  <div class="form-group text-center">
    <button type="submit" class="btn btn-dark">Créer mon profil</button>
  </div>

  @csrf
</form>
