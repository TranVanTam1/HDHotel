<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
{
    public function rules()
    {
        return [
            'UserID' => 'nullable|exists:users,id',
            'FullName' => 'required|string|max:255',
            'PositionID' => 'nullable|exists:positions,id',
            'Phone' => 'nullable|string|max:15',
            'HireDate' => 'nullable|date',
            'Salary' => 'nullable|numeric|min:0',
        ];
    }
}

