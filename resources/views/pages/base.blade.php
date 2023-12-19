<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finally</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://wallpapercave.com/wp/wp4316542.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh; /* Set the body height to 100% of the viewport height */
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #333;
            padding: 30nvm; /* Increase the padding to make the navbar higher */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px; /* Adjust the gap between navigation links */
        }

        .nav-list a {
            text-decoration: none;
            color: #ff0000;
            font-weight: bold;
            font-size: 17px;
            transition: color 0.3s ease;
            box-shadow: 0 2px 4px rgb(12, 12, 12);
            background-color: white;


        }

        .nav-list a:hover {
            color: #ff8c00;
        }

        .btn-primary {
            --bs-btn-color: #ea868f;
            --bs-btn-bg: #26744f;
            --bs-btn-border-color: #000000;
            --bs-btn-hover-color: #ea868f;
            --bs-btn-hover-bg: #000000;
            --bs-btn-hover-border-color: #000000;
            --bs-btn-focus-shadow-rgb: 49,132,253;
            --bs-btn-active-color: #ea868f;
            --bs-btn-active-bg: #000000;
            --bs-btn-active-border-color: #000000;
            --bs-btn-active-shadow: inset 0 3px 5px #ea868f;
            --bs-btn-disabled-color: #ea868f;
            --bs-btn-disabled-bg: #000000;
            --bs-btn-disabled-border-color: #000000;
            }
            .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: #198754;
            }
            .table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color)));
    background-color: #e6ebe8b8;
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg)));
    border-color: #000000;
}
    </style>
</head>
<body>

<div class="container mt-5">
    @yield('content')
</div>

<nav class="navbar navbar-light fixed-bottom" style="background-color: rgba(227, 242, 253, 0);">
    <ul class="nav nav-pills nav-list">
        <li class="nav-item">
            <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::is('accounts') ? 'active' : ''}}" href="{{url('/accounts')}}">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::is('transactions') ? 'active' : ''}}" href="{{url('/transactions')}}">Transaction</a>
        </li>
    </ul>
</nav>

</body>
</html>
