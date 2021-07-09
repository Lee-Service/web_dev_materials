<!DOCTYPE html>
<html>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/homepage2.php?showreviews">SoundTribe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/homepage2.php?showreviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../visitorside/newsletterpage.php">Newsletter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../visitorside/signuppage.php">Register</a>
                </li>

                <!-------------------- Dropdown Signin -------------------------------------------->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Sign-in   
                    </a>
                    <!-- form-->
                    <div class="dropdown-menu p-4">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                <label class="form-check-label" for="dropdownCheck2">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <!-- end form -->

                </li>
            </ul>

            <!-------------------- Search field -------------------------------------------->

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </form>

            </div>
        </div>
</nav>
</html>
