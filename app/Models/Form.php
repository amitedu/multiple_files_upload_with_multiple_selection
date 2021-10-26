<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function upload_files()
//    {
//        return $this->hasMany(UploadFile::class, 'upload_file_uuid', 'uuid');
//    }
}
