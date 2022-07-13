@extends('layouts.admin')
@section('page_title', __('title.admin.profile.edit'))
@section('content')
	<x-card>
                <x-card.header  heading="{{__('app.admin.profile') }}" icon="edit" />
                <x-card.body>
                         <x-form enctype="multipart/form-data"  accept-charset="utf-8" action="{{ route('admin.profile.update') }}" role="form" >
                                @method('patch')
                                <x-form.text name="name"  id="name" label="{{__('app.admin.fields.name') }}" placeholder="{{__('app.admin.fields.name') }}" require="true"  value="{{$admin->name}}"/>
                                <x-form.email name="email" label="{{__('app.admin.fields.email') }}" placeholder="{{__('app.admin.fields.email') }}" require="true"  value="{{$admin->email}}"/>
                                 <x-form.text type="password" name="password"  id="password" label="{{__('app.admin.fields.password') }}" placeholder="{{__('app.admin.fields.password') }}"  />
                                <x-form.text type="password"  name="password_confirmation"  id="password-confirm" label="{{__('app.admin.fields.password_confirmation') }}" placeholder="{{__('app.admin.fields.password_confirmation') }}"  />
                                <!--x-form.select name="status" id="status" label="{{__('app.admin.fields.status') }}" require="true"  placeholder="{{__('app.admin.fields.status') }}" selected="{{$admin->status}}" :options="config('constants.status_options')"  /-->
                                <div class="box-tools pull-right">
                                         <x-form.button name="save" class="btn-success" type="submit" >{{__('app.button.save') }}</x-form.button>          
                                        <a href="{{ route('admin.admin.index') }}" class="btn btn-secondary">{{__('app.button.cancel') }}</a>
                                </div>
                        </x-form>
                </x-card.body>
        </x-card>
@endsection
