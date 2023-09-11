<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreworkRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => 'required',
            'work_start_time' => 'required',
            'work_end_time' => 'required',
            'break_time' => 'required',
            'work_content' => 'required',
            'comment' => 'required',
        ];
    }
}
