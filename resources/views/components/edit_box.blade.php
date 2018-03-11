<div class="edit-box container">
  <a class="link" href="#"><h1 class="text-size-l font-title text-dark-grey m-0">DevInk <span class="font-text font-lighter text-light-secondary">Admin</span></h1></a>

  <hr>

  <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".modal-article-edit">Alerte</button>
  <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".modal-article-edit">Gérer les commentaires</button>
  <button type="button" class="btn btn-light" data-toggle="modal" data-target=".modal-article-edit"><img src="{{ asset('icons/unfilled_star.svg') }}" alt="favoris" width="20px"></button>
  <button type="button" class="btn btn-light" data-toggle="modal" data-target=".modal-article-edit"><img src="{{ asset('icons/bin.svg') }}" alt="favoris" width="20px"></button>

  <div class="modal fade modal-article-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3">
        @include('components.articles.edit')
      </div>
    </div>
  </div>


</div>
