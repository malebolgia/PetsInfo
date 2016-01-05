<?php
namespace Petfinder\Pet\Http\Controllers;

use Former;
use Response;
use User;
use App\Http\Controllers\UserController as UserController;

use Petfinder\Pet\Http\Requests\PetUserRequest;
use Petfinder\Pet\Interfaces\PetRepositoryInterface;

/**
 *
 * @package Pet
 */

class PetUserController extends UserController
{

    /**
     * Redirect path after an action.
     */
    protected $redirectPath = '/user/pet/pet/';


    /**
     * Initialize pet controller
     * @param type PetRepositoryInterface $pet
     * @return type
     */
    public function __construct(PetRepositoryInterface $pet)
    {
        $this->model = $pet;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PetUserRequest $request)
    {

        $pets  = $this->model->all();

        $this->theme->prependTitle(trans('pet::pet.names').' :: ');

        return $this->theme->of('pet::user.pet.index', compact('pets'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PetUserRequest $request, $id)
    {
        $pet = $this->model->find($id);

        return $this->theme->of('pet::user.pet.show', compact('pet'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PetUserRequest $request)
    {
        $pet = $this->model->findOrNew(0);

        Former::populate($pet);

        return $this->theme->of('pet::user.pet.create', compact('pet'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PetUserRequest $request)
    {
        try {
            $attributes             = $request->all();
            $pet       = $this->model->create($attributes);
            return $this->success(trans('messages.success.created', ['Module' => trans('pet::pet.name')]));
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
    public function edit(PetUserRequest $request, $id)
    {
        $pet = $this->model->find($id);

        Former::populate($pet);

        return $this->theme->of('pet::user.pet.edit', compact('pet'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PetUserRequest $request, $id)
    {
        try {
            $attributes         = $request->all();
            $pet       = $this->model->update($attributes, $id);
            return $this->success(trans('messages.success.updated', ['Module' => trans('pet::pet.name')]));
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
    public function destroy(PetUserRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('pet::pet.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
