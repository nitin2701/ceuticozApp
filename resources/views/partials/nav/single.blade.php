<li class="nav-item">
        <a href="{{ !empty($resource) && empty($link) ? route($resource . '.index') : $link }}" class="nav-link">
                <i class="nav-icon fas {{$icon}}"></i>
                <p>{{ !empty($resource) && empty($text) ? __('app.' . $resource . '.index') : $text }}</p>
        </a>
</li>

