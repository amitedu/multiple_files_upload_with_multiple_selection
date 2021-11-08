<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <style type="text/css">
        .image_container {
            height: 60px;
            width: 60px;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px;
        }
        .image_container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }
        .image_container span {
            top: -8px;
            right: 2px;
            color: red;
            font-size: 20px;
            font-weight: normal;
            cursor: pointer;
        }
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <!-- component -->
        <div class="flex justify-center items-center w-full bg-blue-400 rounded">
            <div class="bg-white rounded shadow-2xl p-8 m-4">
                <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Form</h1>

{{--                <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" id="form">--}}
                <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" id="upload_form">
                    @csrf

                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Name</label>
                        <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="name" value="{{ old('name') }}">
{{--                        @error('name')--}}
                        <p class="text-red-500 text-xs mt-2"
                           id="name_error"
                        ></p>
{{--                        @enderror--}}
                    </div>

                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="phone">Number</label>
                        <input class="border py-2 px-3 text-grey-800" type="tel" name="phone" id="phone" value="{{ old('phone') }}">
                        <p class="text-red-500 text-xs mt-2" id="phone_error"></p>
                    </div>

                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                        <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email" value="{{ old('email') }}">
                        <p class="text-red-500 text-xs mt-2" id="email_error"></p>
                    </div>

                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">Message</label>
                        <textarea class="border text-grey-800 text-left" rows="3" name="message" id="message" >
                            {{ old('message') }}
                        </textarea>
                        <p class="text-red-500 text-xs mt-2" id="message_error"></p>
                    </div>

                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
                        <input class="border py-2 px-3 text-grey-800"
                               type="file"
                               name="upload_files[]"
                               multiple=""
                               id="image"
                               onchange="image_select()">
                        <p class="text-red-500 text-xs mt-2" id="upload_files_error"></p>
                    </div>

{{--                    <div class="card-body d-flex flex-wrap justify-content-start" id="container">--}}
{{--                        <!-- Image will be show here-->--}}
{{--                    </div>--}}

                    <!-- This is tailwind version -->
                    <div class="flex-auto flex flex-wrap justify-start" id="container">
                        <!-- Image will be show here-->
                    </div>

                    <!-- Captcha -->
                    <div class="flex flex-col mb-4">
                        <div class="captcha flex ">
                            <span id="showCaptcha">{!! captcha_img() !!}</span>
                            <button type="button"
                                    class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto px-2 py-1 rounded refresh-captcha"
                                    id="refresh-captcha">
                                &#x21bb;
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col mb-4">
                        <input id="captcha" required type="text" class="border py-2 px-3 text-grey-800" placeholder="Enter Captcha" name="captcha">
                        <p class="text-red-500 text-xs mt-2" id="captcha_error"></p>
                    </div>
                    <!-- End Captcha -->

                    <div class="flex mb-4 mt-12">
                        <a href="{{ route('form.index') }}"
                           class="block text-gray-500 uppercase text-lg mx-auto px-4 py-2 rounded"
                        >Cancel</a>
                        <button
                            class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto px-4 py-2 rounded"
                            id="submit"
                            type="submit"
                        >
                            Create
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    // this variable will store images for preview
    let images = [];

    // this function will select images
    function image_select() {
        let image = document.getElementById('image').files;
        for (let i = 0; i < image.length; i++) {
            if (check_duplicate(image[i].name)) {
                images.push({
                    "name" : image[i].name,
                    "url" : URL.createObjectURL(image[i]),
                    "file" : image[i],
                })
            } else
            {
                alert(image[i].name + " is already added to the list");
            }
            console.log(images);
        }

        // document.getElementById('form').reset();
        document.getElementById('container').innerHTML = image_show();
    }

    // this function will show images in the DOM
    function image_show() {
        let image = "";
        images.forEach((i) => {
            image += `<div class="image_container flex justify-center relative">
   	  	  	  	  <img src="`+ i.url +`" alt="Image">
   	  	  	  	  <span class="absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
   	  	  	  </div>`;
        })
        return image;
    }

    // this function will get all images from the array
    function get_image_data() {
        let formData = new FormData();

        formData.append("_token", "{{ csrf_token() }}");
        formData.append('name', document.getElementById('name').value);
        formData.append('phone', document.getElementById('phone').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('message', document.getElementById('message').value);
        formData.append('captcha', document.getElementById('captcha').value);
        for (let index = 0; index < images.length; index++) {
            formData.append("upload_files[" + index + "]", images[index]['file']);
        }

        return formData;
    }

    // this function will delete a specific image from the container
    function delete_image(e) {
        images.splice(e, 1);
        document.getElementById('container').innerHTML = image_show();
    }

    // this function will check duplicate images
    function check_duplicate(name) {
        let image = true;
        if (images.length > 0) {
            for (let e = 0; e < images.length; e++) {
                if (images[e].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }


    // $('#refresh-captcha').click(function () {
    //     $.ajax({
    //         type: 'GET',
    //         url: 'refresh-captcha',
    //         success: function (data) {
    //             $(".captcha span").html(data.captcha);
    //         }
    //     });
    // });

    document.querySelector("#refresh-captcha").addEventListener("click", function (e) {
        e.preventDefault();

        fetch('refresh-captcha', {
            method: 'GET',
        })
        .then(response => response.json())
        .then(json => document.querySelector("#showCaptcha").innerHTML = json.captcha);
        // .then(err => console.log(err));
    });


    {{--document.querySelector("#refresh-captcha").addEventListener("click", function (e) {--}}
    {{--    e.preventDefault();--}}

    {{--    fetch('{{ route('form.store') }}', {--}}
    {{--        method: 'POST',--}}
    {{--        headers: { 'Content-Type': 'multipart/form-data' },--}}
    {{--        body: get_image_data()--}}
    {{--    })--}}
    {{--    .then(response => response.json())--}}
    {{--    .then(json => {--}}
    {{--        this.reset();--}}
    {{--        location.reload();--}}
    {{--    })--}}
    {{--    .then(data => {--}}
    {{--        // Refresh Captcha--}}
    {{--        document.querySelector("#refresh-captcha").addEventListener("click", function (e) {--}}
    {{--            e.preventDefault();--}}

    {{--            fetch('refresh-captcha', {--}}
    {{--                method: 'GET',--}}
    {{--            })--}}
    {{--                .then(response => response.json())--}}
    {{--                .then(json => document.querySelector("#showCaptcha").innerHTML = json.captcha);--}}
    {{--            // .then(err => console.log(err));--}}
    {{--        });--}}

    {{--        // Remove all error messages--}}
    {{--        const errorMessages = document.querySelectorAll('.text-red-500');--}}
    {{--        errorMessages.forEach((element) => element.textContent = '');--}}

    {{--        $.each(data.responseJSON.errors, function (key, value) {--}}
    {{--            $('#' + key + '_error').text(data.responseJSON.errors[key]);--}}
    {{--        });--}}
    {{--    })--}}
    {{--});--}}


    $('#upload_form').submit(function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '{{ route('form.store') }}',
            data: get_image_data(),
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    location.reload();
                }
            },
            error: (data) => {
                // Refresh Captcha
                    fetch('refresh-captcha', {
                        method: 'GET',
                    })
                        .then(response => response.json())
                        .then(json => document.querySelector("#showCaptcha").innerHTML = json.captcha);
                    // .then(err => console.log(err));

                // Remove all error messages
                const errorMessages = document.querySelectorAll('.text-red-500');
                errorMessages.forEach((element) => element.textContent = '');

                $.each(data.responseJSON.errors, function (key, value) {
                    $('#' + key + '_error').text(data.responseJSON.errors[key]);
                });
            }
        });
    });
</script>
</body>
</html>

