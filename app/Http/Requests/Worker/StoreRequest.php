<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'worker_name' => 'string|required',
            'worker_email' => 'email|required',
            'worker_profession' => 'string|required',
            'worker_technologies' => 'array|required',
            'is_online' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'worker_name' => 'Это поле необходимо заполнить',
            'worker_email' => 'Некорректно введенный адрес',
            'worker_profession' => 'Это поле необходимо заполнить',
            'worker_technologies' => 'Это поле необходимо заполнить',
            'is_online' => 'Это поле необходимо заполнить',
        ];
    }
}
