<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'room_type' => 'required|in:single,double,triple,queen,king',
            'price_per_night' => 'required|numeric|min:0',
            'is_VIP' => 'required|in:0,1',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1'
        ];
    }
}
