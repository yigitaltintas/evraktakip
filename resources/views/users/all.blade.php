@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Tüm Kullanıcılar</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a href="{{ route('add-user') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Kullanıcı Ekle</a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>E-mail</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr class="tr-shadow">

                                    <td>{{ $user -> adsoyad }}</td>
                                    <td>
                                        <span class="block-email">{{ $user -> email }}</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('edit-user', $user -> id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="{{ route('delete-user', $user -> id) }}" class="item" title="Delete" onclick="return confirm('Emin misiniz ?')">
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