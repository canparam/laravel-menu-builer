@if(!empty($menu->getItems()))
    <ul
        @foreach($menu->getChildrenAttribute() as $a => $v)
            {{$a}}="{{$v}}"
        @endforeach
        >
        @foreach($menu->getItems() as $k => $n)
            <li><a href="{{$n['link'] ?? ''}}">{!! $n['label'] !!}</a></li>
        @endforeach
    </ul>
@endif
