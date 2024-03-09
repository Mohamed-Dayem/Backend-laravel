<?php

// Import necessary namespaces
namespace App\Http\Controllers;

// BaseController class is extended to provide a foundation for all Controllers
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
// Import BaseController class
use Illuminate\Routing\Controller as BaseController;

// Controller class extends BaseController and includes two traits for authorization and validation
class Controller extends BaseController
{
    // Use AuthorizesRequests trait for authorization checks
    use AuthorizesRequests,
        // Use ValidatesRequests trait for request validation
        ValidatesRequests;
}

