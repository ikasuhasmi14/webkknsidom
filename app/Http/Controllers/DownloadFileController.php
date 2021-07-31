<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function Blankosuratkematian()
    {
    	$filePath = public_path("download/Blankosuratkematian.pdf");
    	$headers = ['Content-Type: application/pdf'];
    	$fileName = 'Blankosuratkematian.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    public function BlankosuratpengantarRTRW()
    {
    	$filePath = public_path("download/BlankosuratpengantarRTRW.pdf");
    	$headers = ['Content-Type: application/pdf'];
    	$fileName = 'BlankosuratpengantarRTRW.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    public function BlankoformulirpermohonanKKbaruWNI()
    {
    	$filePath = public_path("download/BlankoformulirpermohonanKKbaruWNI.pdf");
    	$headers = ['Content-Type: application/pdf'];
    	$fileName = 'BlankoformulirpermohonanKKbaruWNI.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    
}
