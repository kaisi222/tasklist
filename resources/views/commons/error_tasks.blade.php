    @if (count($errors) > 0)
        <ul>
            @foreach ($eroors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif