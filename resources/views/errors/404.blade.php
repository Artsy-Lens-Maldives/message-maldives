@extends('layouts.admin-blank')

@section('title', 'Page Not Found')

@section('content')
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="text-danger">404</h1>
            <h3 class="text-uppercase">Page Not Found !</h3>
            <a href="{{ url('') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>
        </div>
        <footer class="footer text-center">{{ date('Y') }} © Message Maldives.</footer>
    </div>
</section>
      
@endsection