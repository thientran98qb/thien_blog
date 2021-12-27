@extends('admin.layouts.app')
@section('breadcrumb-buttons')
<div class="breadcrumbs-buttons">
    <a href="javascript:void(0)" class="text-black mr-2" type="button">Trợ giúp</a>
    <a href="{{ route('admin.user.create') }}" data-action="submit" data-target="#form-employee" class="btn btn-normal btn-sm mr-3">Tạo mới người dùng</a>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card card-table border-0 mb-4 mt-4">
        <div class="card-body border-0 px-4 pt-0 datatable-wrapper">
            <table class="table table-no-border table-responsive-sm datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50" class="no-sort">
                            <div class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                <label class="custom-control-label" for="checkAll">&nbsp</label>
                            </div>
                        </th>
                        <th class="no-sort">sadsad)</th>
                        <th class="no-sort" width="15%">das21</th>
                        <th class="no-sort" width="15%">sdasd123</th>
                        <th class="no-sort" width="15%">214412</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
