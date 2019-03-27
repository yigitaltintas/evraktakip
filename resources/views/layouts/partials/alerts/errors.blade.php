@if(count($errors))
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Hata!</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif