<ul>
    @foreach ($menu as $item)
        <li><a @class(['active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a></li>
    @endforeach
</ul>
