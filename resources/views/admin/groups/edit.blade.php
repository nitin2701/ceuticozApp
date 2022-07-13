@extends('layouts.admin')
@php $title = __('title.admin.page.edit') ." ".$page->title @endphp
@section('page_title', $title)
@section('content')
	<x-card>
                <x-card.header  heading="{{__('app.page.edit') }}" icon="edit" />
                <x-card.body>
                         <x-form enctype="multipart/form-data"  accept-charset="utf-8" action="{{ route('admin.page.update',$page ?? ''->id) }}" role="form" >
                                @method('patch')
                                <x-form.text name="title" id="title" label="{{__('app.page.fields.title') }}" placeholder="{{__('app.page.fields.title') }}" value="{{ $page->title }}" require="true" />
                                <x-form.text name="slug"  id="slug" label="{{__('app.page.fields.slug') }}" placeholder="{{__('app.page.fields.slug') }}" value="{{ $page->slug }}" require="true" />
                                <div class="form-group">
				        <label for="name">{{__('app.page.fields.content') }}<span>*</span></label>
					<div class="form-group input text required">
					    <textarea id="preview-form-comment"  name="content" class="form-control codemirror-textarea" rows="10"  require="true" autofocus placeholder="{{__('app.page.fields.content') }}"> {{ $page->content }} </textarea>	
					</div>	
                                        @error('text')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror						
				</div>
                                <x-form.text name="meta_title"  id="meta_title" label="{{__('app.page.fields.meta_title') }}" placeholder="{{__('app.page.fields.meta_title') }}" value="{{ $page->meta_title }}" require="true" />
                               <div class="form-group">
				     <label for="name">{{__('app.page.fields.meta_desc') }}<span>*</span></label>
				     <div class="form-group input text required">
					 <textarea id="text"  name="meta_desc" class="form-control" rows="2"  require="true" autofocus placeholder="{{__('app.page.fields.meta_desc') }}"> {{ $page->meta_desc }}</textarea>	
				      </div>	
                                      @error('text')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                               </div>
                               <x-form.select name="type" id="type" label="{{__('app.page.fields.type') }}"  placeholder="{{__('app.page.fields.type') }}" selected="{{ $page->type }}"  :options="config('constants.page_type')" require="true" />
                                <div class="box-tools pull-right">
                                         <x-form.button name="save" class="btn-success" type="submit" >{{__('app.button.save') }}</x-form.button>          
                                        <a href="{{ route('admin.page.index') }}" class="btn btn-secondary">{{__('app.button.cancel') }}</a>
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
