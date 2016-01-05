<?php
namespace Petfinder\Pet\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Petfinder\Pet\Interfaces\PetimageRepositoryInterface;

class PetimagePublicController extends CMSPublicController
{

    /**
     * Constructor
     * @param type \Petfinder\Petimage\Interfaces\PetimageRepositoryInterface $petimage
     *
     * @return type
     */
    public function __construct(PetimageRepositoryInterface $petimage)
    {
        $this->model = $petimage;
        parent::__construct();
    }

    /**
     * Show petimage's list
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $petimages = $this->model->all();

        return $this->theme->of('pet::public.petimage.index', compact('petimages'))->render();
    }

    /**
     * Show petimage
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $petimage = $this->model->findBySlug($slug);

        return $this->theme->of('pet::public.petimage.show', compact('petimage'))->render();
    }
}
