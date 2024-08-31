@if ($section)
    @if ($section->type == 'text')
        <p style="{{ $section->processed_styles }}">{{ $section->content ?? '' }}</p>
    @elseif ($section->type == 'image')
        <img src="{{ $section->content ?? '' }}" alt="{{ $section->name }}" style="{{ $section->processed_styles }}">
    @elseif ($section->type == 'div')
        <div style="{{ $section->processed_styles }}">
            @if (isset($section->content))
                {!! $section->content !!}
            @endif
            @if (isset($section->children) && count($section->children) > 0)
                @foreach ($section->children as $child)
                    <x-section :section="$child" />
                @endforeach
            @endif
        </div>
    @elseif ($section->type == 'span')
        <span style="{{ $section->processed_styles }}">
            @if (isset($section->content))
                {!! $section->content !!}
            @endif
            @if (isset($section->children) && count($section->children) > 0)
                @foreach ($section->children as $child)
                    <x-section :section="$child" />
                @endforeach
            @endif
        </span>
    @endif
@endif
