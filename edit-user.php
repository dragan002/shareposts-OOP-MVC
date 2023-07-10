<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Responsive Multipage Blog Website</title>
</head>

<body>


    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">Mirjana</a>
            <ul class="nav__items">

                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signin.php">Sign In</a></li>

                <li class="nav__profile">
                    <div class="avatar">
                        <img src="images/pngtree-user-girl-simple-avatar-image_1483892.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="fas fa-bars"></i></button>
            <button id="close__nav-btn"><i class="fas fa-light fa-xmark"></i></button>

        </div>
    </nav>

    <!-- ===========================END OF NAV======================-->
    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit User</h2>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">

                <select name="" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>

                <button type="submit" class="btn"><a href="">Update User</a></button>
            </form>
        </div>
    </section>
    <!-- ==================================FOOTER==================-->

    <footer>
        <div class="footer__socials">
            <a href="www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>

            <a href="www.facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>

            <a href="www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>

            <a href="www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>

        <div class="container footer__container">

            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Science</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>

        <div class="footer__copyright">
            <small>Copyright &copy 2023 Dragan </small>
        </div>
    </footer>

    <script src="main1.js"></script>
</body>

</html>