<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Models\File;
use App\Models\Form;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::query()
            ->select('id', 'name', 'phone', 'email', 'message')
            ->with('file:id,form_id,file_path')
            ->get();

        return view('form.index', [
            'forms' => $forms
        ]);
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(FormStoreRequest $formStoreRequest): JsonResponse
    {
        $attributes = $formStoreRequest->all();

        if ($files = $formStoreRequest->upload_files) {
            $filesize = 0;
            foreach ($files as $file) {
                $filesize += filesize($file);
            }

            if ($filesize > 3145728) {
                return response()->json([
                    'errors' => [
                        'upload_files' => 'The uploaded file exceeds the allowed size'
                    ]
                ], 404);
            }

            $form = Form::create([
                'name' => $formStoreRequest['name'],
                'email' => $formStoreRequest['email'],
                'phone' => $formStoreRequest['phone'],
                'message' => $formStoreRequest['message'],
            ]);

            $upload_files['form_id'] = $form->id;

            foreach ($files as $file) {
                $upload_files['file_path'] = $file->store('uploads');

                File::create($upload_files);
            }
        } else {
            Form::create([
                'name' => $formStoreRequest['name'],
                'email' => $formStoreRequest['email'],
                'phone' => $formStoreRequest['phone'],
                'message' => $formStoreRequest['message'],
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function show(Form $form)
    {
        //
    }

    public function edit(Form $form)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Form $form)
    {
        //
    }

    public function refreshCaptcha(): JsonResponse
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
