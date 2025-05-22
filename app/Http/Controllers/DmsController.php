<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DmsService;

class DmsController extends Controller
{
    private $dmsService;
    public function __construct(DmsService $dmsService){

        $this->dmsService = $dmsService;
        view()->share('title',__('dms.title'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['folders'] = ['user','group','1','2'];
        return view('dms.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showFolder(Request $request){

        $this->data['folders'] = $this->dmsService->getDmsMapByKey($request->folder);;
        return view('dms.index',$this->data);

    }
}
