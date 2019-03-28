@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Tüm Evrak Kategorileri</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('add-document-categories') }}">
                                    <i class="zmdi zmdi-plus"></i>Evrak Kategorisi Ekle</a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Kategori Adı</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evrak_kategoriler as $kategori)
                                <tr class="tr-shadow">

                                    <td>{{ $kategori -> evrak_kategori_adi }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('edit-document-categories', $kategori -> id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="{{ route('delete-document-categories', $kategori -> id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin Misiniz?')">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection