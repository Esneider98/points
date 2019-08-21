<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
 public function authorize()
 {
  return true;
 }

 public function rules()
 {
  return [
      'name' => ['required', 'string', 'max:255'],
      'typeDoc' => ['required', 'string', 'max:255'],
      'numberDoc' => ['required', 'string', 'min:5'],
      'typeDoc' => ['required', 'string', 'max:255'],
      'profession' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255'],
      'points' => ['required', 'integer', 'min:0'],
  ];
 }
}
