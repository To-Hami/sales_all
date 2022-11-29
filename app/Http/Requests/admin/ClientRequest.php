<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules =  [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:clients',
            'id_number' => 'required|string|unique:clients',
            'statues' => 'required|string',
            'mobile' => 'required|string|unique:clients',
            'company_name' => 'string',
            'location' => 'required|string',
            'iban' => 'string|unique:clients',
            'vat_number' => 'string',
            'bobox' => 'string',
            'note' => 'string',
            'web_site' => 'string',
            'total_expectation' => 'string',
            'total_sales' => 'string',
            'total_refund' => 'string',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $client = $this->route()->parameter('client');

            $rules['email'] = 'required|email|unique:clients,id,' . $client->id;
            $rules['id_number'] = 'required|numeric|unique:clients,id,' . $client->id;
            $rules['mobile'] = 'required|numeric|unique:clients,id,' . $client->id;

        }//end of if

        return $rules;
    }
}
