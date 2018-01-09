@extends('layouts.admin')

@section('title', 'Admin Home Page')

@section('breadcrumb')
<li class="active">Users</li>
@endsection

@section('content')
<!-- .row -->
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">MANAGE USERS</div>
                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th width="70" class="text-center">#</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>ADDED</th>
                                        <th width="250">ROLE(S)</th>
                                        <th width="300">MANAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach ($users as $user)
                                    <?php $i++ ?>
                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td><span class="font-medium">{{ $user->name }}</span></td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->getRoleNames() }}</td>
                                        <td>
                                            <a href="/admin/users/delete/{{ $user->id }}" type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></a>
                                            <a href="/admin/users/edit/{{ $user->id }}" type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection