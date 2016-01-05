<?php
namespace Petfinder\Pet\Http\Controllers;

use Former;
use Response;
use App\Http\Controllers\AdminController as AdminController;

use Petfinder\Pet\Http\Requests\PetAdminRequest;
use Petfinder\Pet\Interfaces\PetRepositoryInterface;

/**
 *
 * @package Pet
 */

class PetAdminController extends AdminController
{

    /**
     * Initialize pet controller
     * @param type PetRepositoryInterface $pet
     * @return type
     */
    public function __construct(PetRepositoryInterface $pet)
    {
        $this->model = $pet;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PetAdminRequest $request)
    {
        if($request->wantsJson()){

            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('pet.pet.listfields'));
            }

            return array('data' => $array);
        }

        $this->theme->prependTitle(trans('pet::pet.names').' :: ');

        return $this->theme->of('pet::admin.pet.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PetAdminRequest $request, $id)
    {
        $pet = $this->model->find($id);

        if (empty($pet)) {

            if($request->wantsJson())
                return [];

            return view('pet::admin.pet.new');
        }

        if($request->wantsJson())
            return $pet;

        Former::populate($pet);

        return view('pet::admin.pet.show', compact('pet'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PetAdminRequest $request)
    {
        $pet = $this->model->findOrNew(0);
        Former::populate($pet);

        return view('pet::admin.pet.create', compact('pet'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PetAdminRequest $request)
    {
        try {
            $attributes         = $request->all();
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
    public function edit(PetAdminRequest $request, $id)
    {
        $pet = $this->model->find($id);

        Former::populate($pet);

        return view('pet::admin.pet.edit', compact('pet'));
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PetAdminRequest $request, $id)
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
    public function destroy(PetAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('pet::pet.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
