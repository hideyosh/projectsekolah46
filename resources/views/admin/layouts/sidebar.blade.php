<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                    <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('user.index') }}">Admin</a>
                    </li>
                    <li>
                        <a href="{{ route('basicuser.index') }}">Basic User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('barang.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="bi bi-box-seam-fill"></i>
                    <span class="nav-text">Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tipe.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="bi bi-view-list"></i>
                    <span class="nav-text">Tipe</span>
                </a>
            </li>
        </ul>
    </div>
</div>

