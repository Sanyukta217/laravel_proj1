@extends('master')
@section('content')
<div class="container custom-login  text-center">
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
        <main class="form-signin w-100 m-auto">
        <form method="POST" action="login">
            @csrf
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
             <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
             
        </form>
        </main>
        </div>
    </div>
</div>
    
@endsection