<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div class="container">
            <a href="index.html" class="fs-4 navbar-brand fw-bold">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link fw-semibold">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active fw-semibold" aria-current="page">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex flex-fill justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="form-box shadow rounded-3 p-5" id="login-form">
                <div class="form-title text-center">
                    <h2 class="fw-bold mb-5">Contact Us</h2>
                </div>
                <form class="row g-3" method="POST" action="register.php">
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="inputFirstName" name="fName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" name="lName">
                    </div>                    
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone">
                    </div>
                    <div class="col-md-12">
                      <label for="inputState" class="form-label">Message subject <span class="text-danger">*</span></label>
                      <select id="inputState" class="form-select" name="subject">
                        <option selected>Request</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="messages"></textarea>
                    </div>
                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary" name="sendMessage" style="--bs-btn-padding-y: .5rem; --bs-btn-padding-x: 3rem;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark py-3">
        <p class="text-white text-opacity-75 mb-0">@2024 Ferdinand Iskandar</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>