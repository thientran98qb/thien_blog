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
        <form action="" class="p-3">
            <div class="row py-2">
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.username')</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">Email</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.password')</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group py-2">
                        <label for="">@lang('admin.user.phone')</label>
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <label for="">Xã</label>
                    <input type="text" name="" class="form-control">
                </div>
                <div class="col">
                    <label for="">Huyện</label>
                    <input type="text" name="" class="form-control">
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <label for="">Thành phố</label>
                    <select class="form-control" name="province" class="province">
                        @foreach ($provinces as $key => $province)
                        <option value="{{ $key }}">{{ $province }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="">Tỉnh</label>
                    <input type="text" name="" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">@lang('admin.user.address')</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
        </form>
    </div>
</div>
@endsection
