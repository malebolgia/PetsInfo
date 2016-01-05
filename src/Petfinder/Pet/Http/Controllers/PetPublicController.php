<?php
namespace Petfinder\Pet\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Petfinder\Pet\Interfaces\PetRepositoryInterface;

class PetPublicController extends CMSPublicController
{

    /**
     * Constructor
     * @param type \Petfinder\Pet\Interfaces\PetRepositoryInterface $pet
     *
     * @return type
     */
    public function __construct(PetRepositoryInterface $pet)
    {
        $this->model = $pet;
        parent::__construct();
    }

    /**
     * Show pet's list
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $pets = $this->model->all();

        return $this->theme->of('pet::public.pet.index', compact('pets'))->render();
    }

    /**
     * Show pet
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $pet = $this->model->findBySlug($slug);

        return $this->theme->of('pet::public.pet.show', compact('pet'))->render();
    }
}
