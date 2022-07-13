<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- BootStrap Library -->
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <!-- My style File -->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<!-- First Header On Page -->
<div class="row First-Header">
    <div class="col-6 d-flex justify-content-center mt-2 mb-2">
        <p class="gray mb-0">Free Choose Your Car</p>
    </div>

    <div class="col-6 d-flex justify-content-center my-auto">
        <a href="{{ route('login') }}" class="text-decoration-none px-2 gray">My Account</a>
        <a href="{{ route('profile.show', $user = isset($user) ? $user->id : '') }}"
            class="text-decoration-none px-2 gray">Profile</a>
        <a href="{{route('show.user.blogs')}}" class="text-decoration-none px-2 gray">Show My Blogs</a>
        <a href="#" class="text-decoration-none px-2 gray">My Carfite</a>
        <a class="text-decoration-none px-2 gray" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>




@yield('content')


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-3 mt-5">
                <p class="fw-bold text-white fs-5">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
                <p class="mb-2 text-muted">SHOPS</p>
            </div>
            <div class="col-3 mt-5">
                <p class="fw-bold text-white fs-5">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
                <p class="mb-2 text-muted">INFORMATION</p>
            </div>
            <div class="col-3 mt-5">
                <p class="fw-bold text-white fs-5">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
                <p class="mb-2 text-muted">CUSTOMER SERVICE</p>
            </div>
        </div>
    </div>
</footer>

<script src="js/style.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://kit.fontawesome.com/b1f5ce348e.js" crossorigin="anonymous"></script>
