<?php

namespace Petfinder\Pet\Http\Requests;

use App\Http\Requests\Request;
use User;

class PetUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize(\Illuminate\Http\Request $request)
	{
		// Determine if the user is authorized to do  the action,
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules(\Illuminate\Http\Request $request)
	{
		// validation rule for create request.
		if($request->isMethod('POST'))
			return [
				'name_of_pet'          => 'required'
            'perfecture_id'          => 'required'
            'reward_id'          => 'required'
            'lost_date'          => 'required'
            'color_of_pet'          => 'required'
            'age_of_pet'          => 'required'
            'character'          => 'required'
            'characteristics'          => 'required'
            'status'          => 'required'
            'map_lat'          => 'required'
            'map_lang'          => 'required'
            'other_amount'          => 'required'

			];

		// Validation rule for update request.
		if($request->isMethod('PUT') || $request->isMethod('PATCH'))
			return [
				'name_of_pet'          => 'required'
            'perfecture_id'          => 'required'
            'reward_id'          => 'required'
            'lost_date'          => 'required'
            'color_of_pet'          => 'required'
            'age_of_pet'          => 'required'
            'character'          => 'required'
            'characteristics'          => 'required'
            'status'          => 'required'
            'map_lat'          => 'required'
            'map_lang'          => 'required'
            'other_amount'          => 'required'

			];

		// Default validation rule.
		return [

		];

	}

}