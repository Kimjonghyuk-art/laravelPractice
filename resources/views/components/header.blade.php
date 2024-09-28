<div>
    <h3>header start</h3>

    {{ $siteName }}

    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
    <h3>header end</h3>
</div>