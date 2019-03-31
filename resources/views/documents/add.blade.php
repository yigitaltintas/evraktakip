@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Evrak</strong> Ekle
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('add-document') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Evrak Başlık</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="evrak_adi" placeholder="Evrak Başlığı" class="form-control" required>
                                            <small class="form-text text-muted">Evrak başlığını belirtiniz.</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Evrak Tipi</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="evrak_tipi" id="select" class="form-control">
                                                <option value="1">Gelen Evrak</option>
                                                <option value="2">Giden Evrak</option>
                                            </select>
                                            <small class="form-text text-muted">Gelen - Giden Evrak.</small>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Evrak Kategorisi</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="evrak_kategori_id" id="select" class="form-control">
                                                @foreach($evrak_kategori as $kategori)
                                                    <option value="{{ $kategori -> id }}">{{ $kategori -> evrak_kategori_adi }}</option>
                                                @endforeach
                                            </select>
                                            <small class="form-text text-muted">Evrak durumu seçiniz.</small>
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Evrak İçeriği</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="evrak_aciklama" id="textarea-input" rows="9" placeholder="Evrak İçeriği..." class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label"> Evrak Dosyası </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="evrak_fotograf" class="form-control-file">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Kaydet
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection