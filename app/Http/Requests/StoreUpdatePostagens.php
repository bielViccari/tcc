<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePostagens extends FormRequest
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
            'o_que_vai_doar' =>[
                'required',
                'min:1',
                'max:150'
            ],
            
            'quantidade' =>[
                'required',
                'min:1',
                'max:150'
            ],
            'tipo'=>[
                'required',
                'min:3',
                'max:200'
            ],
            'telefone'=>[
                'required',
                'min:12',
                'max:15'
            ],
            'imagem'=>[
                'required',
                'image'
            ],
            'cidade'=>[
                'required',
            ],
            'bairro'=>[
                'required',
            ],
            'rua'=>[
                'required',
            ]
        
        ];
    }
}
