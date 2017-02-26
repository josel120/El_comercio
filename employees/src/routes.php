<?php
// Routes
//Tried to use controller but don't import the right classes

$app->get('/', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml');
});