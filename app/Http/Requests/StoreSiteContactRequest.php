<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiteContactRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
          'name'              => 'required|string|max:40',
          'phone_1'           => 'required|string|max:12',
          'email'             => 'required|email',
          'contact_reason_id' => 'required|exists:contact_reasons,id',
          'message'           => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
          'name.required'              => 'O campo nome é obrigatório.',
          'name.max'                   => 'O campo nome deve conter no máximo 40 caracteres.',
          'phone_1.required'           => 'O campo telefone é obrigatório.',
          'email.required'             => 'O campo e-mail é obrigatório.',
          'email.email'                => 'O campo e-mail deve ser um emial válido.',
          'contact_reason_id.required' => 'O campo Motivo do Contato é obrigatório.',
          'contact_reason_id.exists'   => 'O campo Motivo do Contato deve ser um motivo válido.',
          'message.required'           => 'O campo mensagem é obrigatório.',
          'message.max'                => 'A Mensagem deve conter no máximo 255 caracteres.',
        ];
    }
}