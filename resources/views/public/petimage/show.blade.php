<div class="col-md-12">
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="pet_id">
                {!! trans('pet::petimage.label.pet_id') !!}
              </label><br />
              {!! $petimage['pet_id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="title">
                {!! trans('pet::petimage.label.title') !!}
              </label><br />
              {!! $petimage['title'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="image_path">
                {!! trans('pet::petimage.label.image_path') !!}
              </label><br />
              {!! $petimage['image_path'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="mainpic">
                {!! trans('pet::petimage.label.mainpic') !!}
              </label><br />
              {!! $petimage['mainpic'] !!}
         </div>
      </div>
[<a href='/pet/petimage/{{ $petimage['slug'] }}'>View</a>]
<hr>
</div>