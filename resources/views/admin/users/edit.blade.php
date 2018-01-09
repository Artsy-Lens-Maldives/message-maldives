@extends('layouts.admin')

@section('title', 'Admin Home Page')

@section('breadcrumb')
<li class=""><a href="{{ url('users') }}">Users</a></li>
<li class="active">Edit User</li>
@endsection

@section('content')
<!-- .row -->
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Edit User - {{ $user->name }}</h3>
            <form class="form-horizontal" method="POST" action="{{ url()->current() }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="example-email">Email</label>
                    <div class="col-md-12">
                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}"> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Select Role</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role }}"
                                @foreach ($user_role as $u_role)
                                    @if ($u_role == $role)
                                        selected
                                    @endif
                                @endforeach
                                >{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <a href="{{ url('admin/users') }}" type="button" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection