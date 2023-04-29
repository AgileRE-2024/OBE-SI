<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Contoh ambil data CPL SN Dikti dan CPL Prodi: </h4>
        @foreach ($CPL_SN_Dikti->CPL_Prodi()->get() as $CPL_Prodi)
            <h4>{{ $CPL_SN_Dikti->kodeCPLSN }} berelasi dengan {{ $CPL_Prodi->kodeCPL }}</h4>
        @endforeach
        <h4>Contoh ambil data Profil Lulusan dan CPL Prodi: </h4>
        @foreach ($Profil_Lulusan->CPL_Prodi()->get() as $CPL_Prodi)
            <h4>{{ $Profil_Lulusan->kodePL }} berelasi dengan {{ $CPL_Prodi->kodeCPL }}</h4>
        @endforeach
        <h4>Contoh ambil data Profil Lulusan dan CPL Prodi: </h4>
        @foreach ($Bahan_Kajian->CPL_Prodi()->get() as $CPL_Prodi)
            <h4>{{ $Bahan_Kajian->kodeBK }} berelasi dengan {{ $CPL_Prodi->kodeCPL }}</h4>
        @endforeach
        <h4>Contoh ambil data Profil Lulusan dan Bahan Kajian: </h4>
        @foreach ($Mata_Kuliah->Bahan_Kajian()->get() as $Bahan_Kajian)
            <h4>{{ $Mata_Kuliah->kodeMK }} berelasi dengan {{ $Bahan_Kajian->kodeBK }}</h4>
        @endforeach
        <h4>Contoh ambil data RPS dari MK: </h4>
        @foreach ($Mata_Kuliah->RPS()->get() as $RPS)
            <h4>{{ $Mata_Kuliah->kodeMK }} berelasi dengan {{ $RPS->kodeRPS }}</h4>
        @endforeach
        <h4>Contoh ambil data MK dari RPS: </h4>
        @foreach ($RPS->Mata_Kuliah()->get() as $Mata_Kuliah)
            <h4>{{ $RPS->kodeRPS }} berelasi dengan {{ $Mata_Kuliah->kodeMK }}</h4>
        @endforeach
        <h4>Siapa KPS ketika RPS dibuat? </h4>
        @foreach ($RPS->Dosen()->get() as $Dosen)
            <h4>{{ $RPS->kodeRPS }} berelasi dengan {{ $Dosen->namaDosen }}</h4>
        @endforeach
        <h4>Peran Dosen </h4> 
        @foreach ($RPS->Dosen1()->get() as $Dosen)
            <h4>{{ $RPS->kodeRPS }} ada {{ $Dosen->namaDosen }} sebagai {{ $Detail_Peran_Dosen->where('nip', '=', $Dosen->nip)->where('kodeRPS', '=', $RPS->kodeRPS)->first()->peranDosen }}</h4>
        @endforeach
        <h4>CPMK dari CPL apa? </h4> 
        @foreach ($CPMK->CPL()->get() as $CPL)
            <h4>{{ $CPMK->kodeCPMK }} dari {{ $CPL->kodeCPL }}</h4>
        @endforeach
        <h4>CPMK dari MK apa? </h4> 
        @foreach ($CPMK->Mata_Kuliah()->get() as $MK)
            <h4>{{ $CPMK->kodeCPMK }} dari {{ $MK->kodeMK }}</h4>
        @endforeach
        <h4>MK punya CPMK apa? </h4> 
        @foreach ($MK->CPMK()->get() as $CPMK)
            <h4>{{ $MK->kodeMK }} punya {{ $CPMK->kodeCPMK }}</h4>
        @endforeach
        <h4>SubCPMK berasal dari CPMK mana?</h4>
        @foreach ($SubCPMK->CPMK()->get() as $CPMK)
            <h4>{{ $SubCPMK->kodeSubCPMK }} berasal dari {{ $CPMK->kodeCPMK }}</h4>
        @endforeach
        <h4>CPMK punya sub apa?</h4>
        @foreach ($CPMK->SubCPMK()->get() as $SubCPMK)
            <h4>{{ $CPMK->kodeCPMK }} punya {{ $SubCPMK->kodeSubCPMK }}</h4>
        @endforeach
        <h4>SubCPMK dipake di MingguRPS apa?</h4>
        @foreach ($SubCPMK->Minggu_RPS()->get() as $MingguRPS)
            <h4>{{ $SubCPMK->kodeSubCPMK }} punya {{ $MingguRPS->kodeMingguRPS }}</h4>
        @endforeach
        <h4>RPS punya rencana Minggu RPS apa aja? </h4>
        @foreach ($RPS->Minggu_RPS()->get() as $MingguRPS)
            <h4>{{ $RPS->kodeRPS }} berelasi dengan {{ $MingguRPS->kodeMingguRPS }}</h4>
        @endforeach
        <h4>Minggu RPS pake Teknik Penilaian apa?</h4>
        {{-- <h2>{{ $Detail_RPS->where('kodeMingguRPS','=',$MingguRPS->kodeMingguRPS)->first()->Teknik_Penilaian->teknikPenilaian }}</h2> --}}
        @foreach ($Detail_RPS->where('kodeMingguRPS','=',$MingguRPS->kodeMingguRPS)->all() as $Teknik_Penilaian)
            <h4>{{ $MingguRPS->kodeMingguRPS }} pake teknik penilaian {{ $Teknik_Penilaian->first()->Teknik_Penilaian->teknikPenilaian }}</h4>
        @endforeach
        <h4>Kelas ini dari matkul apa?</h4>
        <h3></h3>
        @foreach ($Kelas->Mata_Kuliah()->get() as $mk)
            <h4>{{ $Kelas->kodeKelas }} {{ $Kelas->namaKelas }} dari {{ $mk->namaMK }} </h4>
        @endforeach
        <h4>Siapa Mahasiswa yang mengambil matkul MK01?</h4>
        <h3></h3>
        @foreach ($Kelas->Mahasiswa()->get() as $mhs)
            <h4>{{ $Kelas->kodeKelas }} dari MK {{ $Kelas->kodeMK }} punya mhs {{ $mhs->namaMahasiswa }} </h4>
        @endforeach
        <h4>{{ $mhs->namaMahasiswa }} yang mengambil matkul apa aja?</h4>
        <h3></h3>
        @foreach ($Mahasiswa->Nilai_Mahasiswa()->get() as $nilai)
            <h4>{{ $nilai->kodeKelas }} dari {{ $Semua_Kelas->where('kodeKelas','=',$nilai->kodeKelas)->first()->Mata_Kuliah->namaMK }}  </h4>
        @endforeach
        <h4>{{ $mhs->namaMahasiswa }} nilainya berapa?</h4>
        {{-- <h2>{{ $Mahasiswa->Kelas()->get() }}</h2> --}}
        @foreach ($Mahasiswa->Nilai_Mahasiswa()->get() as $nilai)
        <h4>ambil di semester {{ $nilai->semesterAmbil }} nilainya {{ $nilai->nilaiAkhir }} </h4>
        @endforeach
        <h4>{{ $mhs->namaMahasiswa }} detail nilai gimana?</h4>
        @foreach ($Detail_Nilai_Mahasiswa->where('kodeNilai','=', $nilai->kodeNilai) as $nilaiT)
        <h4>{{ $nilaiT->Teknik_Penilaian->teknikPenilaian }} nilainya {{ $nilaiT->nilaiPerTeknik }} </h4>
        @endforeach


</body>
</html>