<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Kategori_submenu;

class CustController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function getInfo() {
        $data['cust'] = DB::table('customers')->get();
        $data['menu'] = Menu::where('status', 'Y')->get();
        $data['submenu'] = Submenu::where('status', 'Y')->get();
        $data['category'] = Kategori_submenu::where('status', 'Y')->get();
        return $data;
    }

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

    public function index()
    {
        // customers List
        $getInfo = $this->getInfo(); 
        $content = 'admin/custList'; 
        $filename = 'admin.custList';
        $filename_script = $this->getContentScript($content);
        return view($filename,[
            'data' => auth()->user(),
            'menu' => $getInfo['menu'],
            'submenu' => $getInfo['submenu'],
            'category' => $getInfo['category'],
            'customers' => $getInfo['cust'],
            'script' => $filename_script,
            'title' => 'Customers List'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    { 
        $getInfo = $this->getInfo();
        $content = 'admin/editCust'; 
        $filename = 'admin.editCust';
        $filename_script = $this->getContentScript($content);
        return view($filename, [
            'data' => auth()->user(),
            'menu' => $getInfo['menu'],
            'submenu' => $getInfo['submenu'],
            'category' => $getInfo['category'],
            'cust' => DB::table('customers')->where('username', $username)->get(),
            'script' => $filename_script,
            'title' => 'Edit Data Customers'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
