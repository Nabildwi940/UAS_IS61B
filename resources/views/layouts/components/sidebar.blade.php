<!-- resources/views/layouts/components/sidebar.blade.php -->

<div class="sidebar">
    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Menu Admin</a></li>
        <li><a href="{{ route('mobil.index') }}">Daftar Mobil</a></li>
        <li><a href="#">Mobil Tersedia</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </li>
    </ul>
</div>
