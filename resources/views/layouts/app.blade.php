<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Awik Gallery</title>

    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <header>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">
                    <li class="menu-category">
                        <a href="{{ route('home') }}" class="menu-title">Home</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('makeup') }}" class="menu-title">Makeup</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('box') }}" class="menu-title">Papan Bunga - Ucapan</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('attire') }}" class="menu-title">Sewa Baju - Attire</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('farm') }}" class="menu-title">Kebun</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('link') }}" class="menu-title">Link Affiliate</a>
                    </li>
                    <li class="menu-category">
                        <a href="{{ route('contact') }}" class="menu-title">Contact</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shirt</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shorts & Jeans</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Safety Shoes</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Wallet</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dress & Frock</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Makeup Kit</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Couple Rings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Bracelets</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Clothes Perfume</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Deodorant</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Flower Fragrance</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Air Freshener</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">
                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                        </ul>

                    </li>
                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">EUR &euro;</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>

    @yield('content')

    <footer>
        <div class="footer-nav">
            <div class="container">
                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Information</h2>
                    </li>
                    <li class="footer-nav-item">
                        <a href="{{ route('makeup') }}" class="footer-nav-link">Makeup</a>
                    </li>
                    <li class="footer-nav-item">
                        <a href="{{ route('box') }}" class="footer-nav-link">Papan Bunga - Ucapan</a>
                    </li>
                    <li class="footer-nav-item">
                        <a href="{{ route('attire') }}" class="footer-nav-link">Sewa Baju - Attire</a>
                    </li>
                    <li class="footer-nav-item">
                        <a href="{{ route('farm') }}" class="footer-nav-link">Kebun</a>
                    </li>
                    <li class="footer-nav-item">
                        <a href="{{ route('link') }}" class="footer-nav-link">Link Affiliate</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>
                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <address class="content">
                            Jl. Kopral Hanapia No. 122 13/02, Serasan Jaya, Sekayu
                            <br> Musi Banyuasin, Sumatera Selatan
                        </address>
                    </li>
                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <a href="https://wa.me/6285166894512" class="footer-nav-link">+62 851-6689-4512</a>
                    </li>
                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <a href="mailto:awikyusmin@gmail.com" class="footer-nav-link">awikyusmin@gmail.com</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>
                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    Copyright &copy; <a href="#">Awik Gallery</a> all rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
