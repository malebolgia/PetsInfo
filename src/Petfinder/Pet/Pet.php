<?php namespace Petfinder\Pet;

class Pet
{

    
/**
         * $pet object.
         */
        protected $pet;


/**
         * $petimage object.
         */
        protected $petimage;


    /**
     * Initialize pet facade.
     *
     * @param type \Petfinder\Pet\Interfaces\PetRepositoryInterface $pet
     * @return none
     *
     */    public function __construct(
\Petfinder\Pet\Interfaces\PetRepositoryInterface $pet,
\Petfinder\Pet\Interfaces\PetimageRepositoryInterface $petimage)
    {
        
$this->pet     = $pet;

$this->petimage     = $petimage;

    }

    /**
     * Returns count of pet
     *
     * @param array $filter
     *
     * @return integer
     */
    public function count()
    {
        return  0;
    }

}
