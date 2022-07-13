<div class="alert alert-{{$type}} alert-block">
        @if (is_array($message))
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <ul>
                    @foreach ($message as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @else        
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        @endif	
        {{ $slot }}
</div>


