<div class="bg-danger">
    @if (session()->has('error'))
        <ol>
            <li>{{ session()->get('error') }}</li>
        </ol>
    @endif

    @if (count($errors))
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    @endif
</div>
