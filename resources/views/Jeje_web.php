<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEJE STUDIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

    {{--<style>
        .navbar {
            background-color: rgb(156, 30, 219);
        }

        .navbar a {
            color: white !important;
        }

        .hero {
            background-image: url('public/images/HEADER.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .product-card img {
            height: 200px;
            object-fit: cover;
        }

        .btn-black {
            background-color: rgb(156, 30, 219);
            color: white;
        }

        .btn-black:hover {
            background-color: #333;
        }

        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
        }

        .footer a {
            color: white !important;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style> --}}
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Jeje Studio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <br>
            <h1 class="display-4 fw-bold">WELCOME TO JEJE Studio</h1>
            <p class="lead">By crafting a world-class work environment, we're attracting and retaining top talent</p>
            <button class="btn btn-black btn-lg px-5">See More</button>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4">OUR PROJECT</h2>
        <div class="row g-4">
            <!-- Product Card -->

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="images/Commercial.jpeg" class="card-img-top" alt="Commercial">
                    <div class="card-body">
                        <h5 class="card-title">Commercial</h5>
                        <button class="btn btn-black w-100">View</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="images/Ressidential.jpeg" class="card-img-top" alt="Ressidential">
                    <div class="card-body">
                        <h5 class="card-title">Residential</h5>
                        <button class="btn btn-black w-100">View</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="images/Office.jpeg" class="card-img-top" alt="Office">
                    <div class="card-body">
                        <h5 class="card-title">Office</h5>
                        <button class="btn btn-black w-100">View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Jeje Studio. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
