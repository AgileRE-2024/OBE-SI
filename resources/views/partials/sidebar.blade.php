<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 d-flex"
    style="background-color: #1F2F4D; position: fixed; justify-content: space-between; flex-direction: column;">

    <!-- Sidebar -->
    <div class="sidebar pt-2">
        <!-- Sidebar user panel (optional) -->
        <div class="mt-2 mb-2 pt-2 pb-2">
            <div class="text-center" style="color: white">
                <span style="font-weight:700; font-size:20px">Program Studi</span><br>
                <span>Sistem Informasi</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" style="font-weight:600;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if (Request::is('*home*')) active @endif">
                        <p>
                            <i class="bi bi-house"></i>
                            Home
                        </p>
                    </a>
                </li> --}}
                <li id="kurikulum" class="nav-item @if (Request::is('*kurikulum*')) menu-open @endif">
                    <a href="{{ route('kurikulum.data.profil_lulusan') }}" class="nav-link"
                        @if (Request::is('*kurikulum*')) style="background-color: #F6D743; color: black;" @endif>
                        <p>
                            <i class="bi bi-files"></i>
                            Kurikulum
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item @if (Request::is('*data*')) menu-open @endif">
                            <a href="{{ route('kurikulum.data.profil_lulusan') }}" class="nav-link"
                                @if (Request::is('*data*')) style="background-color: #ffffff; color: black;" @endif>
                                <p>
                                    <i class="bi bi-caret-right-fill"></i>
                                    Data
                                </p>
                            </a>
                            <ul class="nav nav-treeview pl-3">
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.data.profil_lulusan') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.data.profil_lulusan')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            Profil Lulusan
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.data.cpl_sndikti') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.data.cpl_sndikti')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL SNDikti
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.data.cpl_prodi') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.data.cpl_prodi')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL Prodi
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.data.bahan_kajian') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.data.bahan_kajian')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            Bahan Kajian
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.data.mata_kuliah') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.data.mata_kuliah')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            Mata Kuliah
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="pemetaan" class="nav-item @if (Request::is('*pemetaan*')) menu-open @endif">
                            <a href="{{ route('kurikulum.pemetaan.bk_mk') }}" class="nav-link"
                                @if (Request::is('*pemetaan*')) style="background-color: #ffffff; color: black;" @endif>
                                <p>
                                    <i class="bi bi-caret-right-fill"></i>
                                    Pemetaan
                                </p>
                            </a>
                            <ul class="nav nav-treeview pl-3">
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.bk_mk') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.bk_mk')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            BK-MK
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_bk') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.cpl_bk')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL-BK
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_bk_mk') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.cpl_bk_mk')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL-BK-MK
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.susunan_mata_kuliah') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.susunan_mata_kuliah')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            Susunan Mata Kuliah
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.organisasi_mata_kuliah') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.organisasi_mata_kuliah')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            Organisasi Mata Kuliah
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_sndikti_cpl_prodi') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.cpl_sndikti_cpl_prodi')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL SNDikti-CPL Prodi
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_mk') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.cpl_mk')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL-MK
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_pl') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.cpl_pl')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL-PL
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.index') }}" class="nav-link"
                                        @if (str_contains(URL::current(), route('kurikulum.pemetaan.cpl_cpmk_mk.index'))) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            CPL-CPMK-MK
                                        </p>
                                    </a>
                                </li>
                                <li id="mkcpmksubcpmk" class="nav-item">
                                    <a href="{{ route('kurikulum.pemetaan.mk_cpmk_subcpmk') }}" class="nav-link"
                                        @if (URL::current() === route('kurikulum.pemetaan.mk_cpmk_subcpmk')) style="background-color: #989898; color: black;" @endif>
                                        <p style="font-size: 14px">
                                            <i class="bi bi-caret-right-fill"></i>
                                            MK-CPMK-SUBCPMK
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        @if (Request::is('*penilaian*')) style="background-color: #F6D743; color: black;" @endif>
                        <p>
                            <i class="bi bi-book"></i>
                            Penilaian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rps') }}" class="nav-link"
                        @if (Request::is('*rps*')) style="background-color: #F6D743; color: black;" @endif>
                        <p>
                            <i class="bi bi-filetype-pdf"></i>
                            RPS
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- Sidebar footer -->
    <div>
        <div class="card mx-5 rounded-pill" style="background-color:rgba(255, 111, 0, 0.05)">
            <button type="button" class="btn rounded-pill bg-light" style="font-weight:500;color:black">
                <i class="bi bi-box-arrow-right"> </i>
                Keluar
            </button>
        </div>
    </div>
    <!-- /Sidebar footer -->
    <!-- /.sidebar -->
</aside>
