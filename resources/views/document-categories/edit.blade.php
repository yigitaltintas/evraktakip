@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Evrak Kategorisi</strong> Düzenle
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('add-document-categories') }}" method="post" class="form-horizontal">
                                    {{ csrf_field() }}
                                    @include('layouts.partials.alerts.errors')
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Kategori Başlık</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="evrak_kategori_adi" placeholder="Evrak Başlığı" class="form-control" value = "{{  old('evrak_kategori_adi', $entry -> evrak_kategori_adi)  }}" required>
                                            <small class="form-text text-muted">Kategori başlığını belirtiniz.</small>
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