<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Models\File;
use App\Models\Form;
use App\Models\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with('file')->get();
//        dd($forms);
        return view('form.index', ['forms' => $forms]);
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(FormStoreRequest $formStoreRequest)
    {
        $attributes = $formStoreRequest->all();



//        $upload_files['uuid'] = null;
        $filesize = 0;

        if ($files = $formStoreRequest->upload_files) {
//            $attributes['upload_files'] = $formStoreRequest->upload_files->store('uploads');
//            $upload_files['uuid'] = Str::uuid();

            foreach ($files as $file) {
                $filesize += filesize($file);
            }

            if ($filesize > 3145728) {
                return redirect()->back()->withErrors(['upload_files', 'The uploaded file exceeds the allowed size']);
            }

            $form = Form::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'phone' => $attributes['phone'],
                'message' => $attributes['message'],
            ]);

            $upload_files['form_id'] = $form->id;

            foreach ($files as $file) {
//                $upload_files['file_path'] = $formStoreRequest->upload_files->store('uploads');
                $upload_files['file_path'] = $file->store('uploads');

                File::create($upload_files);
            }
        } else {
//            dd('hi');
            Form::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'phone' => $attributes['phone'],
                'message' => $attributes['message'],
            ]);
        }

        dd('at_last');
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
