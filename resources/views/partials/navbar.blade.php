<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Inventory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Kategori Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('items.index') }}">Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('reports.index') }}">Laporan</a></li>
            </ul>
        </div>
    </div>
</nav>
