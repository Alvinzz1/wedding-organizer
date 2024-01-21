<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Zayn Wedding</title>
    <link rel="stylesheet" href="{{ asset('/css/login-style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="#" method="POST" autocomplete="off" class="login-form">
              @csrf
              <div class="logo">
                <h4>Zayn Wedding</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Register</a>
                @if ($errors->any())

                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                      
                    @endforeach
                  </ul>
                </div>
                
              @endif
              <form action="" method="POST"
              @csrf

              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" value="{{ old('name') }}" name="name" class="form-control">

                
              </div>
              

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="#" autocomplete="off" class="register-form">
              <div class="logo">
                <h4>Zayn Wedding</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Login</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{ asset('images/1.png') }}" class="image img-1 show" alt="" />
              <img src="{{ asset('images/2.png') }}" class="image img-2" alt="" />
              <img src="{{ asset('images/3.png') }}" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Hai admin</h2>
                  <h2>Masuk, yuk!</h2>
                  <h2>Gaskeeunn</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{ asset('/js/login-script.js') }}"></script>
  </body>
</html>
