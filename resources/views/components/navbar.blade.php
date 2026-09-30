<nav class="navbar-custom">
    <div class="navbar-inner">
        <a href="{{ route('user.index') }}" class="navbar-brand-custom">
            Punya Kai
        </a>

        <div class="navbar-links">
            <a href="{{ route('user.index') }}" class="navbar-link">
                Daftar User
            </a>

            <a href="{{ route('user.create') }}" class="navbar-link">
                Tambah User
            </a>

            <a href="{{ route('matakuliah.index') }}" class="navbar-link">
                Daftar Mata Kuliah
            </a>

            <a href="{{ route('matakuliah.create') }}" class="navbar-link">
                Tambah Mata Kuliah
            </a>
        </div>
    </div>
</nav>
