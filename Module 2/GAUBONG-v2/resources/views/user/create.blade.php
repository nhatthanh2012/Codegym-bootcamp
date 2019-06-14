@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="content">			
        <form action="{{ route('storeUser') }}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3">                   
                @if(Session::has('message'))
                    <div class='alert alert-success'>{{ Session::get('message') }}</div>
                @endif
                </div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        <label for="your_last_name">Fullname*</label>
                        <input type="text" id="your_last_name" class="form-control" name='fullname' required>
                    </div>  
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" id="email" name='email' class="form-control" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="password" id="password" class="form-control" name='password' required>
                    </div>
                    <div class="space10">&nbsp;</div>                          
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection