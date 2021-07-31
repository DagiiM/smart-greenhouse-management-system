<meta name="viewport" content="width=device-width, initial-scale=1">
<main>
<div style="background-color:white;color:red;width:30%;margin-left:35%;">
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
</div>
<div id="container">

  <form method="POST" action="{{ route('login') }}">
      @csrf
    <img src="https://api.sololearn.com/Uploads/Avatars/5332068.jpg"><br>
    <input type="email" style="font-size:15px;" placeholder="douglasmutethia@hotmail.com" name="email" :value="old('email')" required autofocus><br>
    <input type="password" type="password" name="password" required autocomplete="current-password"  placeholder="********" ><br>

    <!-- Remember Me -->

    <input id="remember_me" type="checkbox" name="remember">
      <label for="remember_me">{{ __('Remember me') }}</label>

    <input type="submit" value="SIGN IN"><br>
    <span>
        <a href="{{route('register')}}" style="text-decoration:none;">New Member?</a>
      <br>
      @if (Route::has('password.request'))
          <a  href="{{ route('password.request') }}" style="text-decoration:none;">
              {{ __('Forgot your password?') }}
          </a>
      @endif
    </span>
  </form>
</div>
</main>

<style>

*{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
main{
  height: 100vh;
  background: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=0.800000011920929&auto=format&fit=crop&w=1199&h=800&q=80&cs=tinysrgb&crop=') fixed no-repeat;
  background-size: cover;
}
#container{
  width: 350px;
  height: 500px;
  background: inherit;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  margin-left: -175px;
  margin-top: -250px;
  border-radius: 8px;
}
#container:before{
  width: 400px;
  height: 550px;
  content: "";
  position: absolute;
  top: -25px;
  left: -25px;
  bottom: 0;
  right: 0;
  background: inherit;
  box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
  filter: blur(10px);
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

form img{
  width: 120px;
  height: 120px;
  border-radius: 100%;
}
form{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  border-bottom: 2px solid rgba(255,255,255, 0.3);
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(255,255,255, 0.8);
}
input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 60px;
  background: #df2359;
  color: white;
  cursor: pointer;
  transition: all 600ms ease-in-out;
}
input[type="submit"]:hover{
  background: #C0392B;
}
span a{
  color: rgba(255,255,255, 0.8);
}
</style>
