<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Models\Form;
use App\Models\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function index()
    {
        return view('form.index', ['forms' => Form::all()]);
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(FormStoreRequest $formStoreRequest)
    {
        $attributes = $formStoreRequest->all();

        $upload_files['uuid'] = null;
        $filesize = 0;

        if ($files = $formStoreRequest->upload_files) {
//            $attributes['upload_files'] = $formStoreRequest->upload_files->store('uploads');
            $upload_files['uuid'] = Str::uuid();

            foreach ($files as $file) {
                $filesize += filesize($file);
            }

            if ($filesize > 3145728) {
                return redirect()->back()->withErrors(['upload_files', 'The uploaded file exceeds the allowed size']);
            }

            foreach ($files as $file) {
//                $upload_files['file_path'] = $formStoreRequest->upload_files->store('uploads');
                $upload_files['file_path'] = $file->store('uploads');

                UploadFile::create($upload_files);
            }
        }

        Form::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'],
            'message' => $attributes['message'],
            'upload_file_uuid' => $upload_files['uuid']
        ]);

        return view('form.index', ['forms' => Form::all()]);
    }

    public function show(Form $form)
    {
        //
    }

    public function edit(Form $form)
    {
        //
    }

    public function update(Request $request, Form $form)
    {
        //
    }

    public function destroy(Form $form)
    {
        //
    }
}
