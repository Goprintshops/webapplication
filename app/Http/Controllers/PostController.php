<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        return "all posts";
    }

    function create_Post(){
        return "creating posts";
    }

    function Delete_Post(){
        return "deleting posts";
    }

    function view_Post(){
        return "viewing posts";
    }
}
