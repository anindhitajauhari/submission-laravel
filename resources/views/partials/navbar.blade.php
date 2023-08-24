<nav class="navbar navbar-expand-lg" style="background-color: #F2E6FF;">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #6B3E99; font-weight: bold;">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'home') ? 'active' : '' }}" href="/" style="color: #6B3E99;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'posts') ? 'active' : '' }}" href="/posts" style="color: #6B3E99;">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'categories') ? 'active' : '' }}" href="/categories" style="color: #6B3E99;">Category</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6B3E99;">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-link {{ ($title === 'mypost') ? 'active' : '' }}" href="/mypost" style="color: #6B3E99;">My Post</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="get">
                                <button type="submit" class="dropdown-item" style="color: #6B3E99;"><i class="bi bi-box-arrow-left"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($title === 'login') ? 'active' : '' }}" style="color: #6B3E99;"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
                </li>
                <li class="nav-item">
                    <a href="/regist" class="nav-link {{ ($title === 'regist') ? 'active' : '' }}" style="color: #6B3E99;"><i class="bi bi-box-arrow-in-right"></i> Registration</a>
                </li>
                </ul>
                @endauth
            </div>
        </div>
    </div>
</nav>