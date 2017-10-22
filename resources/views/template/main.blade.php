@foreach($items as $menu_item)
    <li class="{{ Request::is($menu_item->url) ? 'class="active"' : '' }}"><a
                href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
@endforeach
