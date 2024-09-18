<<?php 

function redirectToroute($route){
    http_response_code(308);
    header("Location: {$route}");
    exit;
}