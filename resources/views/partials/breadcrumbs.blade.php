@if (count($breadcrumbs))

    <ul class="p-link  wow fadeInLeft">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li><a class="home" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>/</li>
            @else
                <li><a href="#">{{ $breadcrumb->title }}</a></li>
            @endif

        @endforeach
    </ul>

@endif