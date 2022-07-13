<ul class="actions">
        
        @if (Auth::guard('admin')->check())
            @php
            $resource = 'admin.'.$resource;
            @endphp
        @elseif (Auth::guard('organization')->check())
            @php
            $resource = 'organization.'.$resource;
            @endphp
        @endif
      
       
        @if(in_array('show_modal',$ops_actions))
                
                <li class="is-inline">
                        <a type="button" class="btn btn-info btn-sm openModal" data-toggle="modal" data-target="#modal-default" data-id="{{$id}}" data-href="{{ route(implode('.', [$resource, 'show']), [$model => $id])  }}" >
                                <i class="fas fa-eye"> </i>
                        </a>
                </li>
                
        @endif 
        
        @if(in_array('show',$ops_actions))
               
                <li class="is-inline">
                        <a class="btn btn-info btn-sm" href="{{ route(implode('.', [$resource, 'show']), [$model => $id])  }}" title="{{ __('app.ops.show') }}"><i class="fas fa-eye"> </i> </a>      
                </li>
                
        @endif
        
       @if(in_array('edit',$ops_actions))
               
                <li class="is-inline">
                        <a class="btn btn-info btn-sm" href="{{ route(implode('.', [$resource, 'edit']), [$model => $id]) }}" title="{{ __('app.ops.edit') }}"><i class="fas fa-pencil-alt"> </i> </a>              
                </li>
                 
         @endif
         
       @if(in_array('delete',$ops_actions))
               
                <li class="is-inline">
                        <form class="is-inline" method="POST" action="{{ route(implode('.', [$resource, 'destroy']), [$model => $id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"  title="{{ __('app.ops.delete') }}"onclick="return confirm('{{ __('app.ops.confirmation') }}')"><i class="fas fa-trash"></i></button>
                       </form>
                </li>
                
         @endif
         
</ul>
