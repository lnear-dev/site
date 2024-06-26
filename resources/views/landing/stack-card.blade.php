<fieldset id="stack-card">
    <legend>
        <h2>my stack</h2>
    </legend>
    @foreach (\App\Util\Icons::PROGRAMMING as $entry)
    {!! $entry !!}
    @endforeach
    </ul>
</fieldset>
