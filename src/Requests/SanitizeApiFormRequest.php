<?php

namespace Mawuekom\CustomFormRequest\Requests;

use Mawuekom\ApiFormRequest\ApiFormRequest;
use Mawuekom\RequestSanitizer\Traits\InputSanitizer;

/**
 * Abstract Class SanitizeApiFormRequest
 * 
 * @package Mawuekom\CustomFormRequest\Requests
 */
abstract class SanitizeApiFormRequest extends ApiFormRequest
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