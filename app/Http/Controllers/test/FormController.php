<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form.index');
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(FormStoreRequest $formStoreRequest, Form $form)
    {
        dd('hi');
//        $attributes = $formStoreRequest->all();
//        dd($formStoreRequest->all());
//        Form::create($formStoreRequest->all());

//        return view('form.index');
    }
}
