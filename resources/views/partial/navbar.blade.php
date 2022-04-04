  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">LAZUARDI-001</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($active==="HOME") ? "active" : ''}}" href="/">Home</a>
                <a class="nav-link {{ ($active==="ABOUT") ? "active" : ''}}" href="/about">About</a>
                <a class="nav-link {{ ($active==="blog") ? "active" : ''}}" href="/blog">Blog</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ ($active==="login") ? "active" : ''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->