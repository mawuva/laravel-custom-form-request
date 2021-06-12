<?php

namespace Mawuekom\CustomFormRequest\Requests;

use Mawuekom\FormRequest\Http\FormRequest;

/**
 * Abstract Class BaseFormRequest
 * 
 * @package Mawuekom\CustomFormRequest\Requests
 */
abstract class BaseFormRequest extends FormRequest
{    
    /**
     * ValidateResolved
     *
     * @return void
     */
    public function validateResolved()
    {
        parent::validateResolved();
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize(): bool;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules(): array;
}