<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StarComp | {{ $title }} </title>

    <!-- Bootstrap -->
    <link href="admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    

    <link href="/css/pure.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login bg">


    <div class="login_wrapper">
        <section class="login_content">
            <form action="/register" method="post">
                @csrf 
                <h1 style="color: black">Create Admin Account</h1>
                <div class="form-floating">
                    <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old ('name') }}"/>
                    @error('name')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text"  name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old ('username') }}"/>
                    @error('username')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old ('email') }}"/>
                    @error('email')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required/>
                    @error('password')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="py-1 px-2 rounded-xl mt-4 warna">Sign Up </button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="/loginUser" class="to_register" style="color: skyblue"> Log in </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <h1 style="color: black"> StarComp</h1>
                    </div>
                </div>
            </form>
        </section>
    </div>

</body>

</html>
