@extends('app')
@section('style')
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
@endsection
@section('title', 'Strechy z hôr/LOGIN')
@section('content')
    <div class="wrapper fadeInDown">
        <div id="formContent">
            @if(isset(Auth::user()->email))
                <script>window.location="/main/successlogin";</script>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-block warningMessage">
                    <button class="close" type="button" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger warningMessage">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- Login Form -->
            <form method="post" action="{{url('/main/checklogin')}}" style="padding-top: 50px">
                {{csrf_field()}}
                <input type="email" id="login" class="fadeIn second" name="email" placeholder="login">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" name="login" value="Log In">
            </form>

        </div>
    </div>
@endsection

