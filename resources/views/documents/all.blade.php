@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Tüm Evraklar</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a href="{{ route('add-document') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Evrak Ekle </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Evrak Başlığı</th>
                                    <th>Evrak Açıklama</th>
                                    <th>Evrak Kategorisi</th>
                                    <th>Evrak Durumu</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evraklar as $evrak)
                                <tr class="tr-shadow">
                                    <td>{{ $evrak -> evrak_adi }}</td>
                                    <td>{{ $evrak -> evrak_aciklama }}</td>
                                    <td>{{ App\Models\EvrakKategori::find($evrak -> evrak_kategori_id )->evrak_kategori_adi}}</td>
                                    <td>{{ ($evrak -> evrak_tipi == 1) ? 'Gelen' : 'Giden' }}</td>
                                    <td>
                                        <div class="table-data-feature">

                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Sil">
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