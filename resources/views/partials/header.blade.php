<section class="content-header px-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col pt-3">
                {{ getdate(date("U"))["weekday"] }}, {{getdate(date("U"))["mday"] }} {{ getdate(date("U"))["month"] }} {{ getdate(date("U"))["year"] }} <i class="bi bi-calendar3"></i>
            </div>
            <div class="col" style="padding-right: 20px; text-align:end;">
                Tim {{ auth()->user()->jabatanDosen }}
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="rounded-circle" alt="..." width="60px">
            </div>
        </div>
        <div class="pb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item" aria-current="page" style="font-size: 12px"><a href="#"
                            class="text-muted"><i class="bi bi-chevron-double-left"></i> Kembali</a></li> --}}
                </ol>
            </nav>
        </div>
    </div><!-- /.container-fluid -->
    {{-- @if (Request::is('*kurikulum*'))
        @if (Request::is('*/pemetaan/*'))
            <nav class="nav nav-pills flex-column flex-sm-row border-bottom">
                <a class="flex-sm-fill text-sm-center nav-link @if (URL::current() === route('kurikulum.pemetaan.bk_mk')) active @endif"
                    href="{{ route('kurikulum.pemetaan.bk_mk') }}">BK-MK</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL-BK</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL-BK-MK</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Susunan Mata Kuliah</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Organisasi Mata Kuliah</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL SNDikti-CPL Prodi</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL-MK</a>
                <a class="flex-sm-fill text-sm-center nav-link @if (URL::current() === route('kurikulum.pemetaan.cpl_pl')) active @endif"
                    href="{{ route('kurikulum.pemetaan.cpl_pl') }}">CPL-PL</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL-CPMK-MK</a>
            </nav>
        @else
            <nav class="nav nav-pills flex-column flex-sm-row border-bottom">
                <a class="flex-sm-fill text-sm-center nav-link @if (URL::current() === route('kurikulum.data.profil_lulusan')) active @endif"
                    href="{{ route('kurikulum.data.profil_lulusan') }}">Profil Lulusan</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL SNDikti</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">CPL Prodi</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Bahan Kajian</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Mata Kuliah</a>
            </nav>
        @endif
    @endif --}}
</section>