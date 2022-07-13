<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Http\Requests\Admin\ProfileAdminRequest;


use App\Http\Controllers\DataTables\Admin\AdminDataTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\Admin;
use Lang;
use Hash;
use DB;

class AdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.index', ['link' => route('admin.admin.create')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.admins.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $input                  =     $request->all();
        $input['password']      =      Hash::make($input['password']);
        $admin = Admin::create($input);
        
        return redirect()->route('admin.admin.index')->with('success', __('message.admin.admin.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    { 
       return view('admin.admins.edit',['admin' => $admin]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
     public function update(UpdateAdminRequest $request, Admin $admin)
     {
                $input   =     $request->all();
                if(!empty($input['password'])){ 
                        $input['password'] = Hash::make($input['password']);
                }else{
                        $input = Arr::except($input,array('password'));    
                }
                $admin->update($input);

                return redirect()->route('admin.admin.index') ->with('success',__('message.admin.admin.update'));
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
        public function destroy(Admin $admin)
        {
                $admin->delete();
                return redirect()->route('admin.admin.index')->with('success',__('message.admin.admin.delete'));
        }
        
        
        public function showProfile(){
                $admin = Admin::find((Auth::guard('admin')->user()->id));
                return view('admin.profile',['admin' => $admin]); 
        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
        public function updateProfile(ProfileAdminRequest $request)
        {
                $admin = Admin::find((Auth::guard('admin')->user()->id));
                $input   =     $request->all();
                if(!empty($input['password'])){ 
                        $input['password'] = Hash::make($input['password']);
                }else{
                        $input = Arr::except($input,array('password'));    
                }
                $admin->update($input);
                return redirect()->route('admin.profile')->with('success',__('message.admin.admin.update'));
        }
        public function logout(){
                Auth::guard('admin')->logout();
                return redirect('admin/login');
        } 
}
