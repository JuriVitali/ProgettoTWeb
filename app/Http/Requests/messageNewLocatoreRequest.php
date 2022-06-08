<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class messageNewLocatoreRequest extends FormRequest
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
            'text_mess' => ['required', 'max:200'],
            'locatore' => ['required', 'string', 'min:8', 'max:20', 
                    Rule::exists('users', 'username')->where('role', 'locatore')]  //si controlla l'esistenza del locatore
        ];
    }
}
