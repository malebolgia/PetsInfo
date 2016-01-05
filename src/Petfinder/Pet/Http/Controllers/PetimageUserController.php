<?php
namespace Petfinder\Pet\Http\Controllers;

use Former;
use Response;
use User;
use App\Http\Controllers\UserController as UserController;

use Petfinder\Pet\Http\Requests\PetimageUserRequest;
use Petfinder\Pet\Interfaces\PetimageRepositoryInterface;

/**
 *
 * @package Petimage
 */

class PetimageUserController extends UserController
{

    /**
     * Redirect path after an action.
     */
    protected $redirectPath = '/user/pet/petimage/';


    /**
     * Initialize petimage controller
     * @param type PetimageRepositoryInterface $petimage
     * @return type
     */
    public function __construct(PetimageRepositoryInterface $petimage)
    {
        $this->model = $petimage;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PetimageUserRequest $request)
    {

        $petimages  = $this->model->all();

        $this->theme->prependTitle(trans('pet::petimage.names').' :: ');

        return $this->theme->of('pet::user.petimage.index', compact('petimages'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PetimageUserRequest $request, $id)
    {
        $petimage = $this->model->find($id);

        return $this->theme->of('pet::user.petimage.show', compact('petimage'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PetimageUserRequest $request)
    {
        $petimage = $this->model->findOrNew(0);

        Former::populate($petimage);

        return $this->theme->of('pet::user.petimage.create', compact('petimage'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PetimageUserRequest $request)
    {
        try {
            $attributes             = $request->all();
            $petimage       = $this->model->create($attributes);
            return $this->success(trans('messages.success.created', ['Module' => trans('pet::petimage.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function edit(PetimageUserRequest $request, $id)
    {
        $petimage = $this->model->find($id);

        Former::populate($petimage);

        return $this->theme->of('pet::user.petimage.edit', compact('petimage'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PetimageUserRequest $request, $id)
    {
        try {
            $attributes         = $request->all();
            $petimage       = $this->model->update($attributes, $id);
            return $this->success(trans('messages.success.updated', ['Module' => trans('pet::petimage.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(PetimageUserRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('pet::petimage.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
