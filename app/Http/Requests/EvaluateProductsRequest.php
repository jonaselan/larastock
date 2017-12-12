<?php

namespace larastock\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluateProductsRequest extends FormRequest
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
        'comment' => 'required|max:255',
        'note' => 'required|numeric|max:2'
      ];
    }
}
