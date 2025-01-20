<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Welcome</title>
</head>
<body>

<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button id="toggle-button" type="button">
                <i class="bi bi-grid"></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">logo</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-person-fill"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#tasks" aria-expanded="false" aria-controls="tasks">
                    <i class="bi bi-list-task"></i>
                    <span>Tasks</span>
                </a>
                <ul class="sidebar-dropdown list-unstyled collapse" id="tasks" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a href="#client-section" class="sidebar-link">Clients</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Commands</a></li>
                    <li class="sidebar-item"><a href="produit.php" class="sidebar-link">Products</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Suppliers</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Cart</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Section</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth1" aria-expanded="false" aria-controls="auth1">
                    <i class="bi bi-shield-check"></i>
                    <span>Users</span>
                </a>
                <ul class="sidebar-dropdown list-unstyled collapse" id="auth1" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Administrator</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="logout.php" class="sidebar-link">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>