<li class="nav-item">
    <a href="{{ route('produks.index') }}"
       class="nav-link {{ Request::is('produks*') ? 'active' : '' }}">
        <p>Produks</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pelanggans.index') }}"
       class="nav-link {{ Request::is('pelanggans*') ? 'active' : '' }}">
        <p>Pelanggans</p>
    </a>
</li>


