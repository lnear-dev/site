<fieldset class={{ $className }}>
    <legend>
        <h2>{{ $title }}</h2>
    </legend>
    <ul>
        @foreach ($data as $entry)
        <li>
            <a target="_blank" href="{{ $entry["url"] }}">
                <img src="{{ $entry["img"] }}" />
                <h2>{{ $entry["name"] ?? '' }}</h2>
            </a>
        </li>
        @endforeach
    </ul>
</fieldset>
