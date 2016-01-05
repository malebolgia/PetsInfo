<div class='col-md-4 col-sm-6'>
               {!! Former::text('name_of_pet')
               -> label(trans('pet::pet.label.name_of_pet'))
               -> placeholder(trans('pet::pet.placeholder.name_of_pet'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::datetime('lost_date')
               -> label(trans('pet::pet.label.lost_date'))
               -> placeholder(trans('pet::pet.placeholder.lost_date'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::text('color_of_pet')
               -> label(trans('pet::pet.label.color_of_pet'))
               -> placeholder(trans('pet::pet.placeholder.color_of_pet'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::numeric('age_of_pet')
               -> label(trans('pet::pet.label.age_of_pet'))
               -> placeholder(trans('pet::pet.placeholder.age_of_pet'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::textarea ('character')
               -> label(trans('pet::pet.label.character'))
               -> placeholder(trans('pet::pet.placeholder.character'))!!}
               </div>

                    <div class='col-md-4 col-sm-6'>
               {!! Former::textarea ('characteristics')
               -> label(trans('pet::pet.label.characteristics'))
               -> placeholder(trans('pet::pet.placeholder.characteristics'))!!}
               </div>

                    <div class='col-md-4 col-sm-6'>
               {!! Former::select('status')
               -> options(trans('pet::pet.options.status'))
               -> label(trans('pet::pet.label.status'))
               -> placeholder(trans('pet::pet.placeholder.status'))!!}
               </div>

                    <div class='col-md-4 col-sm-6'>
               {!! Former::decimal('other_amount')
               -> label(trans('pet::pet.label.other_amount'))
               -> placeholder(trans('pet::pet.placeholder.other_amount'))!!}
               </div>
          

{!!   Former::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}