@extends('admin/layouts.app')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Çiçek İçeriği Düzenle <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        sistemde ki çiçek içeriği düzenlemek için kullanılıyor </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Çiçek İçerik Düzenle</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{ route('admin.dashboard') }}">Admin Paneli</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <br>
    <div class="row justify-content-center">
        <!-- Progress Wizard 2 -->
        <div class="js-wizard-simple block block col-md-6">
            <!-- Wizard Progress Bar -->
            <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;"
                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!-- END Wizard Progress Bar -->

            <!-- Step Tabs -->
            <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">1.Çiçek Bilgileri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">2.Çiçek Resimleri</a>
                </li>
            </ul>
            <!-- END Step Tabs -->

            <!-- Form -->
            <form action="{{ route('admin.flower_update',['id'=>$flowerData->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Steps Content -->
                <div class="block-content block-content-full tab-content px-md-5" style="min-height: 314px;">
                    <!-- Step 1 -->
                    <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                        <div class="form-group">
                            <label for="wizard-progress2-Marka">Çiçek Adı</label>
                            <input class="form-control form-control-alt" type="text" id="wizard-progress2-Marka"
                                name="name" value="{{$flowerData->flowerName}}">
                        </div>
                        <div class="form-group">
                            <label for="wizard-progress2-Marka">Stok Miktarı</label>
                            <input class="form-control form-control-alt" type="int" id="wizard-progress2-Marka"
                                name="stokMiktar" value="{{$flowerData->stokMiktar}}">
                        </div>
                        <div class="form-group">
                            <label for="wizard-progress2-yil">Fiyat</label>
                            <input class="form-control form-control-alt" type="price" id="wizard-progress2-yil"
                                name="price" value="{{$flowerData->price}}">
                        </div>
                    </div>
                    <!-- END Step 1 -->

                    <!-- Step 2 -->
                    <div class="tab-pane" id="wizard-progress2-step2" role="tabpanel">
                        <div class="form-group">
                            <label for="wizard-progress2-Ana">Ana Resim</label>
                            <img src="{{ asset('flowerImages/' . $flowerData->flowerName . '/anaResim/' . $flowerData->anaResim . '')}}" alt="" width="200"
                            height="300">
                            <input class="form-control form-control-alt" type="file" id="wizard-progress2-Ana"
                                name="anaResim">
                        </div>
                    </div>
                    <!-- END Step 2 -->
                </div>
                <!-- END Steps Content -->

                <!-- Steps Navigation -->
                <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary" data-wizard="prev">
                                <i class="fa fa-angle-left mr-1"></i> Önceki
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="button" class="btn btn-secondary" data-wizard="next">
                                Sonraki <i class="fa fa-angle-right ml-1"></i>
                            </button>
                            <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                <i class="fa fa-check mr-1"></i> Kaydet
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Steps Navigation -->
            </form>
            <!-- END Form -->
        </div>
        <!-- END Progress Wizard 2 -->

    </div>
@endsection
