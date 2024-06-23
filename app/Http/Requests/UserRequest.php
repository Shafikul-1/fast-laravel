<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;
use Closure;
class UserRequest extends FormRequest
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
            'fname' => ['required', function (string $attribute, mixed $value, Closure $fail) {

                // INPUT VALUE PRINIT TARMINAL
                 error_log("Validating value: " . $value); // Log the value

                if (strtoupper($value) !== $value) {
                    $fail('This :attribute value is not uppercase, please upppercase all value');
                }
            }],
            'lname' => ['required', new Uppercase],
            'number' => 'required|digits:11',
            'email' => 'required|email',
            'pass' => 'required|alpha_num',
            'country' => 'required|string',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'fname.required' => 'Must be fast name added',
    //         'lname.required' => 'Must be (Last Name) required',
    //     ];
    // }

    public function attributes()
    {
        return [
            'fname' => 'Fast Name',
            'lname' => "( Last Name )",
            'country' => '( Country name )'
        ];
    }

    // protected function prepareForValidation() :void
    // {
    //     $this->merge([
    //         // 'fname' => strtoupper($this->fname),
    //         'fname' => Str::slug($this->fname),
    //     ]);
    // }

    protected $stopOnFirstFailure = true;
}
