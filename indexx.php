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

    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="images/pexels-jess-loiterton-4321076 (1).jpg" alt="">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, libero.</a></h2>
                <p class="post__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium enim velit autem dolorum beatae iure doloribus id voluptatum saepe! Ipsa.</p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="images/pngtree-user-girl-simple-avatar-image_1483892.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Mirjana</h5>
                        <small>June 26, 2023</small>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- SEction POsts-->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>



            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-silvia-trigo-1296203.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-ryan-delfin-2270389.jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="images/pexels-maria-orlova-4947416.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis asperiores nemo laboriosam numquam quidem expedita est consectetur amet debitis eaque!
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="images/pexels-jess-loiterton-4321076 (1).jpg" alt="">
                        </div>
                        <div class="post__author-info">
                            <h3>Dragan</h3>
                            <small>June 26, 2023</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <!-- ===========================END OF POSTS===================-->

    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Science</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
            <a href="" class="category__button">Art</a>
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