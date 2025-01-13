<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function showGallery($year = null)
    {
        $baseDirectory = public_path('gallery');

        if ($year) {
            $directory = $baseDirectory . '\\' . $year;
            $images = File::files($directory);
        } else {
            $images = collect();
            $subdirectories = File::directories($baseDirectory);

            foreach ($subdirectories as $subdirectory) {
                $images = $images->merge(File::files($subdirectory));
            }
        }
        
        $imagePaths = [];

        foreach ($images as $image) {
            $relativePath = str_replace($baseDirectory . DIRECTORY_SEPARATOR, '', $image->getPathname());
            $imagePaths[] = $relativePath;
        }

        return View::make('galeri')->with('images', $imagePaths);
    }
}
