@if(count($success))
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">"İşlem Başarılı!</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif