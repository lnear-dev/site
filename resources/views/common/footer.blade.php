<footer>
    <article>
        <a target="_blank" href="https://www.linkedin.com/company/op-dev/">
            {!! \App\Util\Icons::LINKEDIN !!}
        </a>
        <ul>
            @foreach (\App\UI\Menu::FOOTER as $item)
            <li>
                <a title="nav" href="{{ $item['link'] }}">{{ $item['title'] }}</a>
            </li>
            @endforeach
        </ul>
    </article>
</footer>
