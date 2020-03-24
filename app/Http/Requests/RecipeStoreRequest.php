<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'                  => 'required|unique:recipes|string',
          'notes'                 => 'nullable',
          'origin'                => 'nullable',
          'original_gravity'      => 'nullable|numeric|between:0,100',
          'original_gravity_unit' => 'in:og,fg,p,b',
          'ibu'                   => 'nullable|numeric|between:1,50',
          'color'                 => 'nullable|numeric|between:1,50',
          'color_unit'            => 'in:ebc,srm,L',
        ];
    }

    /**
    * Custom message for validation
    *
    * @return array
    */
    public function messages()
    {
       return [
         'required' => 'Bitte erfasse zumindest einen Namen für dein Bier.',
         'original_gravity.between' => 'Wenn du die Stammwürze angibst, muss sie zwischen 0 und 100 sein'
       ];
    }
}
