<?php

namespace Mawuekom\CustomFormRequest\Requests;

use Mawuekom\RequestSanitizer\Traits\InputSanitizer;
use Mawuekom\CustomFormRequest\Requests\BaseFormRequest;

/**
 * Abstract Class SanitizeFormRequest
 * 
 * @package Mawuekom\CustomFormRequest\Requests
 */
abstract class SanitizeFormRequest extends BaseFormRequest
{
    use InputSanitizer;
    
    /**
     * @var array
     */
    private $sanitizers;

    /**
     * Create new instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this ->sanitizers = $this ->sanitizers();
    }
    
    /**
     * Get sanitizers defined for form input
     *
     * @return array
     */
    abstract public function sanitizers(): array;
}