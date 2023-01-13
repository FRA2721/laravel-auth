<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //changed to true boolean value; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // validation rules
        return [
            "title" => ["required", "max:150", Rule::unique("projects", "title")->ignore($this->project)],
            "description" => ["nullable"],
            "link" => ["max:255"]
        ];
    }
}
