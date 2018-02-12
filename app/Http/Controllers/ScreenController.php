<?php

namespace App\Http\Controllers;

use Screen\Capture;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    //
    public function index()
    {
        $url = 'https://github.com';
        $screenCapture = new Capture();
        $screenCapture->setWidth(1200);//网页的宽
        $screenCapture->setHeight(800);//网页的高
        $screenCapture->setClipWidth(800);//剪辑宽度
        $screenCapture->setClipHeight(800);//剪辑高度
        $screenCapture->setImageType('jpg');//格式
        $screenCapture->setUrl($url);
        $fileLocation = 'test';
        $screenCapture->save($fileLocation);
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0"); // Proxies.
        header('Content-Type:' . $screenCapture->getImageType()->getMimeType());
        header('Content-Length: ' . filesize($screenCapture->getImageLocation()));
        readfile($screenCapture->getImageLocation());
    }
}
