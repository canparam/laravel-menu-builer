@if(!empty($menu->getItems()))
    <ul
        @foreach($menu->getChildrenAttribute() as $a => $v)
            {{$a}}="{{$v}}"
        @endforeach
        >
        @foreach($menu->getItems() as $k => $n)
            <li
                @if(!empty($n['class']))
                    class="{{$n['class']}}"
                @endif
            >
                <a href="{{$n['link'] ?? ''}}"
                    @if(!empty($n['linkAttr']) && is_array($n['linkAttr']))
                        @foreach($n['linkAttr'] as $l => $lAttr)
                            {{$l}}="{{$lAttr}}"
                        @endforeach
                    @endif
                >{!! $n['label'] !!}</a>
            </li>
        @endforeach
    </ul>
@endif
