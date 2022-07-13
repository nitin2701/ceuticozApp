<ul {{ $attributes }}>

         @if($menus)
                @foreach($menus as $menu)
                        @php    $hasSubmenu     =       false; @endphp
                        @if(isset($menu['menus']) && count($menu['menus']) > 0)
                                @php 
                                        $menus                  =       $menu['menus']; 
                                        $hasSubmenu     =       true;
                                @endphp
                         @endif
                        
                                        <li class="nav-item">
                                                <a href="{{$menu['link']}}" class="nav-link @if(url()->current()==$menu['link']) active  @endif">
                                                        <i class="nav-icon fas {{$menu['icon']}}"></i>
                                                        <p>{{$menu['text']}}  @if($hasSubmenu)<i class="fas fa-angle-left right"></i>@endif</p> 
                                                </a>
                                                @if($hasSubmenu)
                                                        <x-menus  class="nav nav-treeview"  :menus=$menus></x-menus>
                                                @endif
                                        </li>
                               
                @endforeach
        @endif
        {{ $slot }}
</ul>
     
