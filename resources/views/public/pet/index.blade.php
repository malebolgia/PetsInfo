<div class="row">
  <div class="col-md-12">
    @forelse($pets as $pet)
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="name_of_pet">
                {!! trans('pet::pet.label.name_of_pet') !!}
              </label><br />
              {!! $pet['name_of_pet'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="perfecture_id">
                {!! trans('pet::pet.label.perfecture_id') !!}
              </label><br />
              {!! $pet['perfecture_id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="reward_id">
                {!! trans('pet::pet.label.reward_id') !!}
              </label><br />
              {!! $pet['reward_id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="lost_date">
                {!! trans('pet::pet.label.lost_date') !!}
              </label><br />
              {!! $pet['lost_date'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="color_of_pet">
                {!! trans('pet::pet.label.color_of_pet') !!}
              </label><br />
              {!! $pet['color_of_pet'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="age_of_pet">
                {!! trans('pet::pet.label.age_of_pet') !!}
              </label><br />
              {!! $pet['age_of_pet'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="character">
                {!! trans('pet::pet.label.character') !!}
              </label><br />
              {!! $pet['character'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="characteristics">
                {!! trans('pet::pet.label.characteristics') !!}
              </label><br />
              {!! $pet['characteristics'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="status">
                {!! trans('pet::pet.label.status') !!}
              </label><br />
              {!! $pet['status'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="map_lat">
                {!! trans('pet::pet.label.map_lat') !!}
              </label><br />
              {!! $pet['map_lat'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="map_lang">
                {!! trans('pet::pet.label.map_lang') !!}
              </label><br />
              {!! $pet['map_lang'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="other_amount">
                {!! trans('pet::pet.label.other_amount') !!}
              </label><br />
              {!! $pet['other_amount'] !!}
         </div>
      </div>
[<a href='/pet/pet/{{ $pet['slug'] }}'>View</a>]
<hr>
    @empty
    <p>No pets</p>
    @endif
  </div>
</div>