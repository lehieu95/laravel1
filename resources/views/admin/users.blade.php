@extends('adminlte::page')

@section('content')
<div class="box-body">
    <table class="table table-striped table-hover" id="siswa-table">
        <thead>
           <th>#</th>
           <th>Name</th>
           <th>Email</th>
           <th></th>
           <th></th>
        </thead>
        <tbody>
           <?php $no =1;?>
           @foreach ( $users as $key => $value)
               <tr>
                  <th>{{ $no++ }}</th>
                  <th>{{ $value->name }}</th>
                  <th>{{ $value->email }}</th>
                  <td><a href="{{ route('admin.users.approve', $value->id) }}" class="btn btn-primary btn-sm">Approve</a></td>
                  <td><a href="{{ route('admin.users.destroy', $value->id) }}" class="btn btn-primary btn-sm">Deny</a></td>
               </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection
