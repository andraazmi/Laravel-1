<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">INDO BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/posts">POSTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}"
                        href="/categories">CATEGORIES</a>
                </li>


            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            {{-- Dashboard --}}
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-house"></i>My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            {{-- Log Out --}}
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>Log
                                        Out</button>
                                </form>

                            </li>
                        </ul>
                @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}"></a><i
                                class="bi bi-box-arrow-in-right"></i>LOGIN</a>

                        </li>
                    @endauth
            </ul>

        </div>
    </div>
</nav>