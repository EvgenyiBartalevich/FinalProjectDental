
    @if($errors->any())
        <div class="errors_message">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif


@if(session('success'))
<div class="message_success">
    {{ session('success') }}
</div>

@endif