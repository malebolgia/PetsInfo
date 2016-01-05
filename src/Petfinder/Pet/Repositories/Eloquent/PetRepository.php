<?php

namespace Petfinder\Pet\Repositories\Eloquent;

use Petfinder\Pet\Interfaces\PetRepositoryInterface;

class PetRepository extends BaseRepository implements PetRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return config('pet.pet.model');
    }
}
