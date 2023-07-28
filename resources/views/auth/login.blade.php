@extends('layouts.app')

@section('content')

<!-- Unicons -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
<!-- Costum CSS -->
<style>
    /* POPPINS FONT */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    *{
        font-family: 'Poppins', sans-serif;
    }
    .wrapper{
        background: #000113;
        padding: 0 20px 0 20px;
    }
    .main{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .side-image{
        background-image: url("https://images.unsplash.com/photo-1556906781-9a412961c28c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 10px 0 0 10px;
        position: relative;
    }
    .row{
    width:  900px;
    height:550px;
    border-radius: 10px;
    background: #fff;
    padding: 0px;
    box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
    }
    .text{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text p{
        color: #ffffff;
        font-size: 20px; 
    }
    i{
        font-weight: 400;
        font-size: 15px;
    }
    .right{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    }
    .input-box{
    width: 330px;
    box-sizing: border-box;
    }
    img{
        width: 35px;
        position: absolute;
        top: 30px;
        left: 30px;
    }
    .input-box header{
        font-weight: 700;
        text-align: center;
        margin-bottom: 45px;
    }
    .input-field{
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 0 10px 0 10px;
    }
    .input{
        height: 45px;
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        outline: none;
        margin-bottom: 20px;
        color: #40414a;
    }
    .input-box .input-field label{
        position: absolute;
        top: 10px;
        left: 10px;
        pointer-events: none;
        transition: .5s;
    }
    .input-field input:focus ~ label
    {
        top: -10px;
        font-size: 13px;
    }
    .input-field input:valid ~ label
    {
    top: -10px;
    font-size: 13px;
    color: #5d5076;
    }
    .input-field .input:focus, .input-field .input:valid{
        border-bottom: 1px solid #743ae1;
    }
    .submit{
        border: none;
        outline: none;
        height: 45px;
        background: #ececec;
        border-radius: 5px;
        transition: .4s;
    }
    .submit:hover{
        background: rgba(37, 95, 156, 0.937);
        color: #fff;
    }
    .signin{
        text-align: center;
        font-size: small;
        margin-top: 25px;
    }
    span a{
        text-decoration: none;
        font-weight: 700;
        color: #000;
        transition: .5s;
    }
    span a:hover{
        text-decoration: underline;
        color: #000;
    }

    @media only screen and (max-width: 768px){
        .side-image{
            border-radius: 10px 10px 0 0;
        }
        img{
            width: 35px;
            position: absolute;
            top: 20px;
            left: 47%;
        }
        .text{
            position: absolute;
            top: 70%;
            text-align: center;
        }
        .text p, i{
            font-size: 16px;
        }
        .row{
            max-width:420px;
            width: 100%;
        }
    }
</style>

<body style="background-color: #000113;"></body>
<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                
                <!-------------      image     ------------->
                <div class="text fw-semibold">
                    <p>Seeking more Adventure <i>- ShoesStore</i></p>
                </div>
                
            </div>
            <div class="col-md-6 right">
                
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-box">
                
                <header>{{ __('Login') }}</header>
                
                <div class="input-field">
                        <input type="text" class="input @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required="" autocomplete="email" autofocus>
                        <label for="email">{{ __('Email Address') }}</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 

                <div class="input-field">
                        <input type="password" class="input @error('password') is-invalid @enderror" id="password" name="password" required="" autocomplete="current-password">
                        <label for="password">{{ __('Password') }}</label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
                @if (Route::has('password.request'))
                    <div class="signin">
                        <span>{{ __('Forgot Your Password?') }} <a style="color: #000000; text-decoration: none;" class="btn btn-link" href="{{ route('password.request') }}">Klik here</a></span>
                    </div>
                @endif
                </div>
            </form> 
            </div>
        </div>
    </div>
</div>
</body>
@endsection
