<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Kategori_submenu;

class DashboardController extends Controller
{
    function getContentScript($filename)
    { 
        $filename_script = base_path().'/resources/views/'.$filename.'_script.blade.php';
        if (file_exists($filename_script)) {
            $filename_script = $filename.'_script';
        } else {
            $filename_script = 'script';
        }
        // echo $filename_script; die();
        return $filename_script;
    }
    // index
    function index() {
        $content = 'home/dashboard'; 
        $filename = 'home.dashboard';
        $filename_script = $this->getContentScript($content);
        return view($filename, [
            'data' => auth()->user(),
            'menu' => Menu::where('status', 'Y')->get(),
            'submenu' => Submenu::where('status', 'Y')->get(),
            'category' => Kategori_submenu::where('status', 'Y')->get(),
            'script' => $filename_script,
            'title' => 'Dashboard'
        ]); 
    }
}
