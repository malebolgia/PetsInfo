<?php

namespace Petfinder\Pet;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PetTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('pets')->insert(array(
            
        ));

        DB::table('permissions')->insert(array(
            array(
                'name' => 'pet.pet.view',
                'readable_name' => 'View Pet'
            ),
            array(
                'name' => 'pet.pet.create',
                'readable_name' => 'Create Pet'
            ),
            array(
                'name' => 'pet.pet.edit',
                'readable_name' => 'Update Pet'
            ),
            array(
                'name' => 'pet.pet.delete',
                'readable_name' => 'Delete Pet'
            )
        ));

        DB::table('settings')->insert(array(
            // Uncomment  and edit this section for entering value to settings table.
            /*
            array(
                'key'      => 'pet.pet.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ),
            */
        ));
    }
}
