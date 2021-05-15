<?php

namespace App\Http\Controllers;

class PageController extends Controller {

    public function about() {
        return "about us page";
    }

    public function contact() {
    return "Contact page goes here";
    }

    public function submitContact() {
    return "Contact submission goes here";
    }


}
