@if($menu)
    <div class="menu classic">
        <ul id="nav" class="menu">
            @include(env('THEME').'.customMenuItems',['items'=>$menu->roots()])
        </ul>
    </div>
@endif















{{--
@if($menu)
    <div class="menu classic">
        <ul id="nav" class="menu">
            @foreach($menu->roots() as $item)
                <li {{ (URL::current() == $item->url()) ? "class=active" : '' }} >

                    <a href="{{ $item->url() }}">{{ $item->title }}</a>
                    @if($item->hasChildren())

                        <ul class="sub-menu">
                            @foreach($item->children() as $children)
                                <li>
                                    <a href="{{ $children->url() }}">{{ $children->title }}</a>

                                </li>


                            @endforeach

                        </ul>

                    @endif

                </li>
            @endforeach




        </ul>
    </div>
@endif
--}}
