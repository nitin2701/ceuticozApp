<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreGroupRequest;
use App\Http\Requests\Admin\UpdateGroupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Group;
use App\Http\Controllers\DataTables\Admin\GroupDataTable;
use Illuminate\Support\Arr;
use Hash;
use DB;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GroupDataTable $dataTable)
    {
       return $dataTable->render('admin.groups.index', ['link' => route('admin.group.create')]);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create'); 
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
       $input      = $request->all();
       $group = Group::create($input);
       return redirect()->route('admin.group.index')->with('success', __('message.admin.group.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    { 
         return view('admin.groups.edit',['group' => $group]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, Group $group)
    { 
           $input   =  $request->all();
           $group->update($input);
           return redirect()->route('admin.group.index')->with('success',__('message.admin.group.update'));  
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
          $group->delete();
          return redirect()->route('admin.group.index')->with('success',__('message.admin.group.delete')); 
    }


    





}