<?php
namespace Petfinder\Pet\Http\Controllers;

use Former;
use Response;
use App\Http\Controllers\AdminController as AdminController;

use Petfinder\Pet\Http\Requests\PetimageAdminRequest;
use Petfinder\Pet\Interfaces\PetimageRepositoryInterface;

/**
 *
 * @package Petimage
 */

class PetimageAdminController extends AdminController
{

    /**
     * Initialize petimage controller
     * @param type PetimageRepositoryInterface $petimage
     * @return type
     */
    public function __construct(PetimageRepositoryInterface $petimage)
    {
        $this->model = $petimage;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PetimageAdminRequest $request)
    {
        if($request->wantsJson()){

            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('pet.petimage.listfields'));
            }

            return array('data' => $array);
        }

        $this->theme->prependTitle(trans('pet::petimage.names').' :: ');

        return $this->theme->of('pet::admin.petimage.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PetimageAdminRequest $request, $id)
    {
        $petimage = $this->model->find($id);

        if (empty($petimage)) {

            if($request->wantsJson())
                return [];

            return view('pet::admin.petimage.new');
        }

        if($request->wantsJson())
            return $petimage;

        Former::populate($petimage);

        return view('pet::admin.petimage.show', compact('petimage'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PetimageAdminRequest $request)
    {
        $petimage = $this->model->findOrNew(0);
        Former::populate($petimage);

        return view('pet::admin.petimage.create', compact('petimage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PetimageAdminRequest $request)
    {
        try {
            $attributes         = $request->all();
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
    public function edit(PetimageAdminRequest $request, $id)
    {
        $petimage = $this->model->find($id);

        Former::populate($petimage);

        return view('pet::admin.petimage.edit', compact('petimage'));
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PetimageAdminRequest $request, $id)
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
    public function destroy(PetimageAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('pet::petimage.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
