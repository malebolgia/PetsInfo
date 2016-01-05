<?php

namespace Petfinder\Pet;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PetimageTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('petimages')->insert(array(
            
        ));

        DB::table('permissions')->insert(array(
            array(
                'name' => 'pet.petimage.view',
                'readable_name' => 'View Petimage'
            ),
            array(
                'name' => 'pet.petimage.create',
                'readable_name' => 'Create Petimage'
            ),
            array(
                'name' => 'pet.petimage.edit',
                'readable_name' => 'Update Petimage'
            ),
            array(
                'name' => 'pet.petimage.delete',
                'readable_name' => 'Delete Petimage'
            )
        ));

        DB::table('settings')->insert(array(
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'pet.petimage.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ));
    }
}
