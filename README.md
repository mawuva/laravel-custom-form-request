# Custom Form Request

Custom form request for laravel's projects provides with form data sanitization and api form request extension

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-custom-form-request
```

## Usage

If you want to sanitize your request data before validation, you can do this... 
<br>
Check on [Laravel Request Sanitizer](https://github.com/mawuva/laravel-request-sanitizer) for more informations 

```php
namespace App\Http\Requests;

use Mawuekom\CustomFormRequest\Requests\SanitizeFormRequest;

class CreateUserRequest extends SanitizeFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:255',
            'first_name'    => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
        ];
    }

    /**
     * Get sanitizers defined for form input
     *
     * @return array
     */
    public function sanitizers(): array
    {
        return [
            'name' => [
                Capitalize::class,
            ],
            'first_name' => [
                CapitalizeEachWords::class
            ]
        ];
    }
}
```

You can also use form request for your Rest API. 
<br>
Check on [API Form Request](https://github.com/mawuva/laravel-api-form-request)

```php
namespace App\Http\Requests;

use Mawuekom\CustomFormRequest\Requests\SanitizeApiFormRequest;

class CreateUserRequest extends SanitizeApiFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:255',
            'first_name'    => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
        ];
    }

    /**
     * Get sanitizers defined for form input
     *
     * @return array
     */
    public function sanitizers(): array
    {
        return [
            'name' => [
                Capitalize::class,
            ],
            'first_name' => [
                CapitalizeEachWords::class
            ]
        ];
    }
}
```

Hope this package will help you to build great things... 🏙️  Have fun 👍

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
