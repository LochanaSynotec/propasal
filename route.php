<?php

function route($url, $data = null, $pageName = null)
{
    $basePath = '/propasal'; // Set your base path here

    // Build the URL based on the provided URL and data
    $url = $basePath . '/' . $url;

    // Append data to the URL, if provided
    if ($data !== null) {
        $url .= '/' . $data;
    }

    // Append page name to the URL, if provided
    if ($pageName !== null) {
        $url .= '?page=' . $pageName;
    }

    return $url;
}



?>