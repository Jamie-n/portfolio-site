<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function download()
    {
        return response()->download('../public/cv/jamie-neighbours-cv.docx');
    }
}
