@extends('admin/layouts/default')
@section('title')
    Daftar Kod Unit
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/form_layouts.css') }}" rel="stylesheet" type="text/css"/>
@stop
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Daftar Kod Unit</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Daftar</a>
            </li>
            <li class="active">Kod Unit</li>
        </ol>
    </section>

    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body border">
                        <form action="{{ route('hr:storeUnit') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            @csrf
                            {{ method_field('post') }}
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Bahagian</label>
                                    <div class="col-md-3">
                                        <select name="aset_brand_id" id="aset_brand_id" class="form-control select2">
                                            <option value="" readonly>Sila Pilih Bahagian</option>
                                            @foreach($departments as $a)
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('hr_department_id'))
                                            <span class="text-danger">{{ $errors->first('hr_department_id') }}</span>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Unit</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="name"
                                               class="form-control" placeholder="Masukkan Unit">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label"
                                           for="form-text-input">Singkatan Unit</label>
                                    <div class="col-md-3">
                                        <input type="text" id="form-text-input"
                                               name="abbr"
                                               class="form-control" placeholder="Masukkan Singkatan Unit">
                                        @if ($errors->has('abbr'))
                                            <span class="text-danger">{{ $errors->first('abbr') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3 ml-auto">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">
                                            Simpan
                                        </button>
                                        <span class="btn btn-effect-ripple btn-light"><a href="{{ route('hr:unit') }}">Kembali</a> </span>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </section>



@stop


@section('footer_scripts')


    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/form_layouts.js') }}" type="text/javascript"></script>


@stop
