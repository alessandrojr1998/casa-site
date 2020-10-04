<?php

namespace App\Validator;
use App\Http\Requests\PublicacaoRequest;
use Illuminate\Support\Facades\Validator;

class PublicacaoValidator
{
    public static function validate($data)
    {
        $request = new PublicacaoRequest();
        $validator = Validator::make($data, $request->rules(), $request->messages());

        if(!$validator->errors()->isEmpty()) {
            throw new ValidationException($validator, "Erro na validação da publição.");
        }

        return $validator;
    }
}