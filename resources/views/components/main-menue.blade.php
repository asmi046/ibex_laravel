<ul>
    @foreach ($menu as $item)
        @if ($item->enabled)
            <li><a @class(['active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a></li>
        @endif
    @endforeach
</ul>
