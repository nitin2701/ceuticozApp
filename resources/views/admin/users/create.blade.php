@extends('layouts.admin')
@section('page_title', __('title.admin.user.new'))
@section('content')
	<x-card>
                <x-card.header  heading="{{__('app.user.create') }}" icon="plus-circle" />
                <x-card.body>
                        <x-form enctype="multipart/form-data"  accept-charset="utf-8" action="{{ route('admin.user.store') }}" role="form" >
                                <x-form.text name="name"  id="name" label="{{__('app.user.fields.name') }}" placeholder="{{__('app.user.fields.name') }}" require="true" />
                                <x-form.email name="email" label="{{__('app.user.fields.email') }}" placeholder="{{__('app.user.fields.email') }}" require="true" />
                                 <x-form.text type="password" name="password"  id="password" label="{{__('app.user.fields.password') }}" placeholder="{{__('app.user.fields.password') }}" require="true" />
                                <x-form.text type="password"  name="password_confirmation"  id="password-confirm" label="{{__('app.user.fields.password_confirmation') }}" placeholder="{{__('app.user.fields.password_confirmation') }}" require="true" />
                                <x-form.select name="status" id="status" label="{{__('app.user.fields.status') }}"  placeholder="{{__('app.user.fields.status') }}"  :options="config('constants.status_options')" require="true" />
                                <div class="box-tools pull-right">
                                         <x-form.button name="save" class="btn-success" type="submit" >{{__('app.button.save') }}</x-form.button>          
                                        <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">{{__('app.button.cancel') }}</a>
                                </div>
                        </x-form>
                </x-card.body>
        </x-card>
@endsection
