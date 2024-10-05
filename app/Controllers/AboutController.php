<?php

class AboutController {
    public function index() {
        View::render('about', ['title' => 'About']);
    }
}
