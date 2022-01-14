@extends('admin.layouts.app')
@section('breadcrumb-buttons')
<div class="breadcrumbs-buttons">
    <a href="javascript:void(0)" class="text-black mr-2" type="button">Trợ giúp</a>
    <a href="" data-action="submit" data-target="#form-employee" class="btn btn-normal btn-sm mr-3">Tạo mới người dùng</a>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card card-table border-0 mb-4 mt-4">
        @if (session()->has('errors'))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="alert"></div>
        <form action="{{ route('admin.user.store') }}" class="p-3" method="POST" id="form-employee">
            @csrf
            <div class="row py-2">
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.username')</label>
                        <input type="text" name="user_name" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.password')</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.phone')</label>
                        <input type="text" name="phone_number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <label for="">Xã</label>
                    <input type="text" name="ward" class="form-control">
                </div>
                <div class="col">
                    <label for="">Huyện</label>
                    <input type="text" name="district" class="form-control">
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <label for="">Thành phố</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="col">
                    <label for="">Tỉnh</label>
                    <select class="form-control" name="province" class="province">
                        @foreach ($provinces as $key => $province)
                            <option value="{{ $key }}">{{ $province }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">@lang('admin.user.address')</label>
                <textarea class="form-control" name="address" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="float-right mt-3 pb-3 d-flex justify-content-betweenn">
                        <button type="submit" class="btn btn-normal">Tao moi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
    <script>
        $('')
    </script>
@endpush
