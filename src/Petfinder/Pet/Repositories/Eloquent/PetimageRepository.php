<?php

namespace Petfinder\Pet\Repositories\Eloquent;

use Petfinder\Pet\Interfaces\PetimageRepositoryInterface;

class PetimageRepository extends BaseRepository implements PetimageRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return config('pet.petimage.model');
    }
}
