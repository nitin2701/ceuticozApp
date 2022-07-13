@if ($errors->any())
         @php 
                 $message        =       $errors->all();
                $type                =       "danger"
         @endphp
       <x-alert :type="$type"  :message="$message" />
@endif

@foreach (['danger', 'warning', 'success', 'deleted'] as $type)
         @if(Session::has($type))
                @php $message        =       Session::get($type); @endphp
                <x-alert :type="$type"  :message="$message" />
        @endif
@endforeach        

