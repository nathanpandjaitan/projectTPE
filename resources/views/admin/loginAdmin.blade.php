    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <!-- Bootstrap -->
        <link href="admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="admin/vendors/animate.css/animate.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Custom Theme Style -->
        <link href="admin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login bg">
    
        @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

        <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
            <section class="login_content">
                <form action="/login" method="post">
                @csrf
                <h1>Sign in Admin</h1>
                <div>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" id="username" required value="{{old('username') }}" />
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="Password" required />
                </div>
                <div>
                    <button class="btn btn-primary submit ml-3" type="submit">
                        Login
                    </button>

                    <p><a href="/register" style="color: skyblue">Sign up Admin</a></p>


                </div>

                <div class="clearfix"></div>

                <div class="separator">
    

                    <div class="clearfix"></div>
                    <br />
                    <div>
                    <h1><i class="fa fa-hearth"></i> StarComp</h1>
                    </div>
                </div>
                </form>
            </section>
        </div>

        </div>
    </body>
    </html>
