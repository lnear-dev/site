<header>
    <nav>
        <a href="/">
            <img src="/assets/brand-kit/cl_LNE.svg" />
        </a>
        <ul>
            @foreach (\App\UI\Menu::DOMAINS as $item)
            <li>
                <a title="nav" href="{{ route("{$item}.landing") }}">
                    {{ "{$item}." }}
                </a>
            </li>
            @endforeach
        </ul>

    </nav>
</header>
