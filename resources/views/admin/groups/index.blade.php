@extends('layouts.admin')
@section('group_title', __('title.admin.group.list'))
@section('content')
         @php $resource = "group" @endphp
         <x-card>
		<x-card.header  heading="{{ __('app.'.$resource.'.index') }}" icon="list" >  
                         @if(isset($link))
                        <div class="float-right">
                                <a href="{{$link}}" class="btn btn-secondary btn-success">{{ __('app.'.$resource.'.create') }}</a>
                        </div>
                        @endif
                 </x-card.header>                
                <x-card.body>
                        {!! $dataTable->table(['class' => 'table table-bordered table-striped dataTable dtr-inline']) !!}
               </x-card.body>
	</x-card>   
@endsection

@section('scripts')
    {!! $dataTable->scripts() !!}
@endsection
