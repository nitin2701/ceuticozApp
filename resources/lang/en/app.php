<?php
return [

    /*
    |--------------------------------------------------------------------------
    | English Application App Specific Resources
    |--------------------------------------------------------------------------
    */
        'name'     => 'ADMIN' ,  
        'column' => [
                'created_at'    => 'Created at',
                'deleted_at'    => 'Deleted at',
                'active'        => 'Active',
                'inactive'      => 'Inactive',
                'reset'         => 'Reset',
                'save'          => 'Save',
                'user' =>      [
                        'name'          =>      'Name',
                        'email'         =>      'Email',
                        'status'        =>      'Status',
                        'email_verified_at'     => 'Verified',
                 ],
                'admin' =>      [
                        'name'          =>      'Name',
                        'email'         =>      'Email',
                 ],
                'group'   =>  [
                        'name'              => 'Group Name',
                        'is_master'               => 'Master',
                        'is_active'            => 'Status',
                        'created_at'         => 'Created At'
                        ],
                
        ],
        'dashboard' => [
                'index' => 'Dashboard'
        ],

        'profile' => [
                'index' => 'Profile'
        ],

        'user' => [
                'create' => 'Add New',
                'edit'   => 'Edit User',
                'index'  => 'Manage Users',
                'fields' => [
                        'name'                  => 'Name',
                        'email'                 => 'Email',
                        'password'              => 'Password',
                        'password_confirmation' => 'Password Confirm',
                        'status'                => 'Status',
                  ],
        ],
        'admin' => [
                'create' => 'Add New',
                'edit'   => 'Edit Admin',
                'index'  => 'Manage Admins',
                'profile'   => 'Update Profile',
                'fields' => [
                        'name'                  => 'Name',
                        'email'                 => 'Email',
                        'password'              => 'Password',
                        'password_confirmation' => 'Password Confirm',
                        'status'                => 'Status',
                        'option'                => 'Select Option'
                  ],
        ],
        'group' => [
                'name'   => 'Group Name',
                'create' => 'Add New',
                'edit'   => 'Edit Group',
                'show'   => 'View Group',
                'index'  => 'Manage Groups',
                'type_select' => 'Select Option',
                'fields' => [
                        'name'                  => 'Group Name',
                        'description'           => 'Description',
                        'is_master'             => 'Master',
                        'is_active'             => 'Is Active',
                        'created_at'            => 'Created At',
                        'option'                => 'Select Option'
                  ],
        ],
        'ops' => [
                'confirmation'  => 'Are you sure?',
                'create'        => 'Create',
                'delete'        => 'Delete',
                'edit'          => 'Edit',
                'modified'      => 'Modified on',
                'name'          => 'Action',
                'order'         => 'Order',
                'show'          => 'Show',
                'token'         => 'Token'
        ],
        'checkbox' => [
                  'name'  => '#'
         ],
        'csrf_error'        => 'Seems like you couldn\'t submit the form for a longtime. Please try again.',
                'datatables' => [   // DataTables, files can be found @ https://datatables.net/plug-ins/i18n/
                'sInfo'         => 'Showing _START_ to _END_ of _TOTAL_ entries',
                'sInfoEmpty'    => 'Showing 0 to 0 of 0 entries',
                'sInfoFiltered' => '(filtered from _MAX_ total entries)',
                'sInfoPostFix'  => '',
                'sLengthMenu'   => 'Show _MENU_ entries',
                'sProcessing'   => '<div class="overlay"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></span></div>',
                'sSearch'       => 'Search:',
                'sUrl'          => '',
                'sZeroRecords'  => 'No matching records found',
                'oPaginate' => [
                    'sFirst'    => 'First',
                    'sLast'     => 'Last',
                    'sNext'     => 'Next',
                    'sPrevious' => 'Previous'
                ]
        ],
        'button' => [
                'save'  => 'Save',
                'cancel'  => 'Cancel',
                'update'  => 'Update',
                'close'  => 'Close',
                'apply'  => 'Apply',
                'savechanges'  => 'Save Changes',
                'regenerateToken'  => 'Regenerate Token',
                'back'    => 'Back',
                'reset'   => 'Reset',
                'search' => 'Search',
                'filter' => 'Filter',
                'filter_more' => 'More Filters',
        ],
         'select' => 'Select',
         'bulk_action'        => 'Bulk action',
         'fields' => [
                'yes'  => 'Yes',
                'no'  =>  'No',
        ],

];
