@php
use App\Util\Icons;
use Docs\Models\Package;
use Docs\Data\Package as PackageData;
@endphp
<div id="packages-card">
    <h1>packages</h1>
    <fieldset>
        @foreach (PackageData::collect(Package::with('versions')->get()) as $entry)
        <a class="package-card" target="_blank" href="{{ $entry->docs }}">
            <div>
                <h2>{{ $entry->name }}</h2>
                {!! $entry->icon !!}
            </div>
        </a>
        @endforeach
    </fieldset>
</div>
