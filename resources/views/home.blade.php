@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    @role('admin')
                        Welcome Admin
                    @else
                        Welcome User
                    @endrole
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        @role('admin')
                            Admins can only see this
                        @endrole
                    </p>

                    <p>You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
