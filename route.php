<?php
function route($path, $gender = null, $slug = null)
{
    $basePath = '/propasal'; // Set your base path here

    // Define your routes and corresponding URLs
    $routes = [
        '' => '/', // Index page route
        'search-note-or-past-paper' => '/search-note-or-past-paper',
        'upload-note-or-past-paper' => '/upload-note-or-past-paper',
        'request-book-and-past-paper' => '/request-book-and-past-paper',
        'Female' => '/' . $gender . '/' . $slug, // Update the 'Female' route with dynamic values
        // Add more routes as needed
    ];

    if (array_key_exists($path, $routes)) {
        return $basePath . $routes[$path];
    }

    if ($gender !== null && $slug !== null && array_key_exists("$gender/$slug", $routes)) {
        return $basePath . $routes["$gender/$slug"];
    }

    return '#'; // Return a fallback URL if the route doesn't exist
}

//echo route('Female', 'Female', 'php-function-to-make-slug-url-string@2023061418'); // Output: /propasal/Female/222/222

?>