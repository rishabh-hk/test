<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
    protected function validateRequest(){
        return request()->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);
    }

    public function store(){
        $author = Author::create($this->validateRequest());
        return redirect($author->path());
    }
}
