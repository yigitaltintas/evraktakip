@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Kullanıcı</strong> Düzenle
                            </div>
                            <div class="card-body card-block">
                                @include('layouts.partials.alerts.errors')
                                <form action="{{ route('edit-user', $entry -> id) }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label" >Ad Soyad</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="adsoyad" placeholder="Ad Soyad" class="form-control" value="{{ old('adsoyad', $entry -> adsoyad) }}" required>
                                            <small class="form-text text-muted">Kullanıcı adını belirtiniz.</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="text-input" name="email" placeholder="Email" class="form-control" value="{{ old('email', $entry -> email) }}" required>
                                            <small class="form-text text-muted">Email adresinizi belirtiniz.</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Parola</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" name="sifre">
                                            <small class="form-text text-muted">Parolanızı giriniz.</small>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Güncelle
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection