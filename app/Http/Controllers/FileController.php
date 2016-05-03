<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
      public function showFile()
    {
    	//Storage::disk('dropbox')->put('file.txt', 'Contents');

    	$files = Storage::disk('dropbox')->listContents("",true);

    	foreach ($files as $file) {
    		//	$time = Storage::disk('dropbox')->lastModified($file);
		}	

		//$contents = Storage::disk('dropbox')->get('oversize_pdf_test_0.pdf');

        return response($files);
        //->header('Content-Type', 'application/pdf');
    }
}
