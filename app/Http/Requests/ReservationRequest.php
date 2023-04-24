<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class ReservationRequest extends FormRequest
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
        $now = now()->toDateString('Y-m-d');
        return [
            'email' => 'required|string|max:255',
            'date' => 'required|date_format:Y-m-d|after:'.$now,
            'message' => 'required|string|max:255'
        ];
    }
}
