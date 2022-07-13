 <aside class="main-sidebar sidebar-dark-primary">
	<a href="" class="brand-link">
                <img src="{{asset('img/logo.png')}}" alt="{{__('app.name')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> {{__('app.name')}}</span>
        </a>
        <div class="sidebar">
		@auth
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image"><img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"></div>
                                <div class="info"><a href="#" class="d-block">{{ Auth::user()->name }}</a></div>
                        </div>
		@endauth
                <nav class="mt-2">
                        @php

                        
                                $menus          =       [
                                        'dashboard'     =>       [
                                                'link'          =>   route('admin.home'), 
                                                'text'          =>    __('app.dashboard.index'),  
                                                'icon'          =>    __('fa-tachometer-alt'),  
                                        ],
                                        'group'     =>       [
                                                'link'          =>    route('admin.group.index'),  
                                                'text'          =>    __('app.group.index'),  
                                                'icon'          =>    __('fa fa-file'),       
                                        ],
                                        
                                        
                                ];
                        @endphp
                        <x-menus  class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" :menus=$menus>
                                @include('partials.nav.logout', ['icon' => 'fa-sign-out-alt'])
                        </x-menus>
		</nav>
	</div>
 </aside>
 
 @push('page_scripts')
        <script>
        $(document).ready(function () {
              $(".nav-treeview li a").each(function(){
                        if($(this).hasClass("active")){
                                $(this).parent().parent("ul").parent("li").addClass('menu-is-opening menu-open');
                                $(this).parent().parent("ul").prev("a").addClass('active');
                        }
              });       
        });
        </script>
@endpush   