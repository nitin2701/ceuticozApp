@extends('layouts.admin')
@section('group_title', __('title.admin.group.new'))
@section('content')
	<x-card>
                <x-card.header  heading="{{__('app.group.create') }}" icon="plus-circle" />
                <x-card.body>
                        <x-form enctype="multipart/form-data"  accept-charset="utf-8" action="{{ route('admin.group.store') }}" role="form" >
                                <x-form.text name="name"  id="name" label="{{__('app.group.fields.name') }}" placeholder="{{__('app.group.fields.name') }}" require="true" />
                               <div class="form-group">
				     <label for="name">{{__('app.group.fields.description') }}<span>*</span></label>
				     <div class="form-group input text required">
					 <textarea id="text"  name="description" class="form-control" rows="2"  require="true" autofocus placeholder="{{__('app.group.fields.description') }}"></textarea>	
				      </div>	
                                      @error('text')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                               </div>
                               <x-form.select name="is_active" id="is_active" label="{{__('app.group.fields.is_active') }}" require="true"  placeholder="{{__('app.group.fields.option') }}"  :options="config('constants.status_options')"  />
                               <x-form.select name="is_master" id="is_master" label="{{__('app.group.fields.is_master') }}" require="true"  placeholder="{{__('app.group.fields.option') }}"  :options="config('constants.master_options')"  />					
                                <div class="box-tools pull-right">
                                         <x-form.button name="save" class="btn-success" type="submit" >{{__('app.button.save') }}</x-form.button>          
                                        <a href="{{ route('admin.group.index') }}" class="btn btn-secondary">{{__('app.button.cancel') }}</a>
                                </div>
                        </x-form>
                </x-card.body>
        </x-card>
@endsection
@section('scripts')
<script type="text/javascript">

        $(document).ready(function(){
	//code here...
	var code = $(".codemirror-textarea")[0];
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers : true
	});

});
</script>
@endsection


