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
        <div class="card-body border-0 px-4 p-3 datatable-wrapper">
            <table class="table table-no-border table-responsive-sm datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50" class="no-sort">
                            <div class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                <label class="custom-control-label" for="checkAll">&nbsp</label>
                            </div>
                        </th>
                        <th class="no-sort">Tên nhân sự</th>
                        <th class="no-sort">Email</th>
                        <th class="no-sort">Số điện thoại</th>
                        <th class="no-sort">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="user_id_{{ $user->id }}" value="{{ $user->id }}" disabled>
                            <label for="user_id_{{ $user->id }}">&nbsp</label>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ \Common::formatDate($user->created_at) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('.datatable').DataTable();
    });

</script>
@endpush
