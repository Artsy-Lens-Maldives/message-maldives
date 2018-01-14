@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url()->current() }}" method="post" enctype="multipart/form-data">    
            {{ csrf_field() }}
            <div class="input-group">
                <input type="file" name="image" id="">    
            </div>
            <button type="submit" class="btn btn-large btn-block btn-default">Submit</button>    
        </form>
    </div>
@endsection