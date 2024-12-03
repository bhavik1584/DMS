<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use App\Services\UserService;
use App\Models\User;
use View;

class UserController extends Controller
{
    private $userService; 
    public function __construct(UserService $userService){
        $this->userService = $userService;
        view()->share('title',__('user.title'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $datatable)
    {
        return $datatable->render('user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $input = $request->validated();
        $user = $this->userService->create($input);

        if ($user) {
            return redirect()->route('user.index')->withSuccess(__('common_message.create_success',['name' => 'User']));
        }
        else{
            return redirect()->route('user.create')->withErrors(__('common_message.error',['name' => 'User']));
        }

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
        $user =  $this->userService->edit($id);
        $this->data['user'] = $user;
        return view('user.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    { 
        $input = array_filter($request->validated());
        $user = $this->userService->update($id,$input);

        if ($user) {
            return redirect()->route('user.index')->withSuccess(__('common_message.update_success'));
        }
        else {
            return redirect()->route('user.index')->withErrors(__('common_message.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
