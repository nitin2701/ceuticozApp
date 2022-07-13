<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Http\Controllers\DataTables\Admin\UserDataTable;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Arr;
use DB;
class UserController extends Controller
{
        /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
        */
    function __construct()
    {
            
    }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable)
    {

        return $dataTable->render('admin.users.index', ['link' => route('admin.user.create')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('admin.users.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
                $input                             =     $request->all();
                $input['password']      =       Hash::make($input['password']);
                $user = User::create($input);
                
                return redirect()->route('admin.user.index')->with('success',__('message.admin.user.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    { 
        
       return view('admin.users.edit',['user' => $user]); 
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
            $input                             =     $request->all();
            if(!empty($input['password'])){ 
                    $input['password'] = Hash::make($input['password']);
            }else{
                    $input = Arr::except($input,array('password'));    
            }
            $user->update($input);

            return redirect()->route('admin.user.index') ->with('success',__('message.admin.user.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success',__('message.admin.user.delete'));
    }
}
