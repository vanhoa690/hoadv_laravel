<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src={{ asset('img/logo.png') }} alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Homepage</a></li>
                            <li><a href="/categories">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    @foreach ($categories as $category)
                                        <li><a href={{ route('categories.show', $category) }}>{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href={{ route('movies.index') }}>Movies</a></li>
                            <li><a href="/blog">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="/login"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
