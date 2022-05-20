@extends('admin/layouts.app')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Sipariş Listesi <small
                        class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"> Sistemde kayıtlı
                        olan siparişleri listeleme. <span style="text-decoration: underline">Toplam Sipariş
                            Sayısı</span>:(<span style="color: brown;">{{ count($sepetArray) }}</span>) </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">İhaleler Listesi</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{ route('admin.dashboard') }}">Admin Paneli</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-content block-content-full">
            <div class="my-table">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Çiçek Adı</th>
                            <th style="width: 15%;">Resim</th>
                            <th style="width: 15%;">Adet</th>
                            <th style="width: 15%;">Ödenen Fiyat</th>
                            <th style="width: 10%;">Alan Kişi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sepetArray as $sepet)
                            <tr>
                                <td class="text-center font-size-sm">{{$sepet['flowerName']}}</td>
                                {{-- <td class="text-center font-size-sm"><a target="_blank"
                                    href="{{ route('user.ilanDetay', ['id' => $ihale['ihaleNo']]) }}"
                                    class="slide">
                                    {{ $ihale['ihaleNo'] }}
                                </a>
                            </td> --}}
                                <td><img
                                            src="{{ asset('flowerImages/' . $sepet['flowerName'] . '/anaResim/' . $sepet['anaResim'] . '') }}"
                                            height="30%" width="60%" style="max-width:150px;max-height:150px;"alt="" /> </td>
                                <td class="text-center font-size-sm">{{$sepet['flowerAdet']}}</td>
                                @php 
                                $fiyat = $sepet['flowerAdet'] * $sepet['price'];
                                @endphp
                                <td class="text-center font-size-sm">{{ $fiyat }}</td>
                                <td class="text-center font-size-sm">{{ $sepet['name'] }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
@endsection
