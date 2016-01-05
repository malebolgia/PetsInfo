<div class='col-md-4 col-sm-6'>
               {!! Former::text('title')
               -> label(trans('pet::petimage.label.title'))
               -> placeholder(trans('pet::petimage.placeholder.title'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::file('image_path')
               -> label(trans('pet::petimage.label.image_path'))
               -> placeholder(trans('pet::petimage.placeholder.image_path'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::inline_checkboxes('mainpic[]')
               -> checkboxes(trans('pet::petimage.options.mainpic'))
               -> label(trans('pet::petimage.label.mainpic'))!!}
               </div>

          

{!!   Former::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}