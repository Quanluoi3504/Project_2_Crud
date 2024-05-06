<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .line {
            border-bottom: 1px solid black; /* Adjust thickness, color, and style as needed */
            height: 100px; /* Adjust height as needed */
            position: absolute;
            /*left: 50%; !* Adjust position as needed *!*/
            /*right: 50%; !* Adjust right position as needed *!*/
        }
        .sidebar {
            border: 2px gray;
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: gray;
            padding-top: 15px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar il {
            padding: 10px;
        }

        .sidebar il:hover {
            background-color: #0dcaf0;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: rgba(248, 249, 250, 0.51);
        }
    </style>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    <header>
        Trang Quản Trị
    </header>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <div class="sidebar">
                <div class="row row-cols-1 row-cols-md-6 g-5">
                    <a class="navbar-brand col ms-5 mt-5" href="#">Logo</a>
                    <div class="col">
                        <h4>username</h4>
                        <p style="line-height: 0.5">admin</p>
                    </div>
                </div>
                <div class="line"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul style="border-top: #2b2f32 1px solid;  margin-left: 10%">
                    <li style="margin-top: 10%">
                        <a class="nav-link" href="/admin/category-list">Category List</a>
                    </li>
                    <li style="margin-top: 10%">
                        <a class="nav-link" href="/admin/product-list">Product List</a>
                    </li>
                    <li style="margin-top: 10%">
                        <a class="nav-link" href="/admin/user-list">User List</a>
                    </li>
                    <li style="margin-top: 10%">
                        <a class="nav-link" href="/admin/order-list">Order List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        @if($path == "admin/category-list")
            @include("admin.category-list")
        @endif
        @if($path == "admin/category-add")
            @include("admin.category-add")
        @endif
        @if($path == "admin/category-edit")
            @include("admin.category-edit")
        @endif

        @if($path == "admin/product-list")
            @include("admin.product-list")
        @endif
        @if($path == "admin/product-add")
            @include("admin.product-add")
        @endif
        @if($path == "admin/product-edit")
            @include("admin.product-edit")
        @endif

        @if($path == "admin/user-list")
            @include("admin.user-list")
        @endif
        @if($path == "admin/user-add")
            @include("admin.user-add")
        @endif
    </div>
</body>
</html>
