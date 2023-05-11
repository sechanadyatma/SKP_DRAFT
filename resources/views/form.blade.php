{{-- Ini Halaman Print --}}
<style>
    h1,h2,h3,h4,h5,h6 {
        margin:0;
    }
    table {
        border-spacing: 0;
    }
    .kegiatan {
        min-width: 350px;
    }
    .text-center {
        text-align: center;
    }
    .bg-grey {
        background: lightgrey;
    }
    .clearboth {
        clear: both;
    }
    .logo {
        margin-left: 2cm;
        width: 3cm;
        height: 3cm;
        float: left;
    }
    
    .kop {
        width: 15cm;
        height: 3cm;
        float: left;
    }
    
    .img-fluid {
        width: 100%
    }
    
    body {
        max-width: 21cm;
    }

    .text-bold {
        font-weight: bold;
    }

</style>
<div>
    <div class="logo">
        <img class="img-fluid" src="{{ url('/vendor/iain/logo.png') }}">
    </div>
    <div class="kop text-center">
        <h2>SASARAN KINERJA PEGAWAI</h2>
        <h4>KEMENTERIAN PERTAHANAN RI</h4>
        <p>Jalan Fatmawati 97727<br/>Telepon: (0921) 3121426 Faximile: (0921) 3123773<br/>Website: www.kemhan</p>
    </div>
    <div class="clearboth"></div>
</div>
<hr/>
<br/>
<br/>
<h2 class="text-center">FORMULIR SASARAN KERJA</h2>
<h4 class="text-center">PEGAWAI NEGERI SIPIL</h4>
<br/>
<br/>
<table border=1 style="width: 21cm;">
    <tr class="text-bold">
        <td>No</td>
        <td colspan=3>I. PEGAWAI DINILAI</td>
        <td>No</td>
        <td colspan=7>II. PEJABAT PENILAI</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Nama</td>
        <td colspan=2>Atasan :</td>
        {{-- Pejabat Penilai --}}
        <td>1</td>
        <td>Nama</td>
        <td colspan=6>Pegawai :</td>
    </tr>
    <tr>
        <td>2</td>
        <td>NIP</td>
        <td colspan=2>Nip :</td>
        {{-- Pejabat Penilai --}}
        <td>2</td>
        <td>NIP</td>
        <td colspan=6>Nip</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Pangkat/Gol.Ruang</td>
        <td colspan=2></td>
        {{-- Pejabat Penilai --}}
        <td>3</td>
        <td>Pangkat/Gol.Ruang</td>
        <td colspan=6></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Jabatan</td>
        <td colspan=2></td>
        {{-- Pejabat Penilai --}}
        <td>4</td>
        <td>Jabatan</td>
        <td colspan=6></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Unit Kerja</td>
        <td colspan=2>/td>
        {{-- Pejabat Penilai --}}
        <td>5</td>
        <td>Unit Kerja</td>
        <td colspan=6></td>
    </tr>
    
    {{-- BODY dari Tugas Jabatan --}}
    {{-- Header Nya --}}

    <tr>
        <td colspan="12">
        Hasil Kerja
        </td> 
    </tr>

    <tr class="text-bold text-center">
        <td>NO</td>
        <td colspan=3>RENCANA HASIL KINERJA PIMPINAN YANG DIINTERVENSI</td>
        <td colspan=2>HASIL KINERJA PIMPINAN YANG DIINTERVENSI</td>
        <td colspan=2>Aspek</td>
        <td colspan=2>Indikator</td>
        <td colspan=2 class="text-cente">TARGET</td>
    </tr>

    <tr>
        <th>1</th>
        <th colspan="3">2</th>
        <th colspan="2">3</th>
        <th colspan="2"></th>
        <th colspan="2">4</th>
        <th colspan="2">5</th>
    </tr>

    <tr>
        <td colspan="12" class="text-left">A.Utama</td>
    </tr>

    <tr>
        <th rowspan=3>1</th>
        <td rowspan=3 colspan="3" class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum animi veritatis laboriosam, temporibus incidunt nesciunt sapiente inventore repudiandae harum minus beatae architecto repellendus a ipsa! Exercitationem nostrum dolore quis nisi.</td>
        <td rowspan=3 colspan="2" class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quo dicta. Nostrum amet natus, et inventore accusamus autem? Assumenda amet unde consectetur in soluta corrupti a excepturi? Omnis, nulla neque!</td>
        <td colspan="2">Kuantitas</td>
        <td colspan="2" class="text-center">Jumlah Laporan Penerapan Aplikasi</td>
        <td colspan="2" class="text-center">1</td>
    </tr>
    <tr>
        <td colspan="2">Kualitas</td>
        <td colspan="2" class="text-center">Jumlah Laporan Penerapan Aplikasi</td>
        <td colspan="2" class="text-center">95%</td>
    </tr>
    <tr>
        <td colspan="2">Waktu</td>
        <td colspan="2" class="text-center">Jumlah Laporan Penerapan Aplikasi</td>
        <td colspan="2" class="text-center">1 laporan</td>
    </tr>

    <tr>
        <td colspan="12">B.Tambahan</td>
    </tr>

    <tr>
        <td colspan="3">Diklat</td>
        <td colspan="3"></td>
        <td colspan="2">Kualitas</td>
        <td colspan="2">Sertifikat</td>
        <td colspan="2">1</td>
    </tr>

    <tr>
        <td colspan="12">PERILAKU KERJA</td>
    </tr>

    <tr>
        <td rowspan="3">1</td>
        <td colspan="11">Berorientasi Pelayanan</td>
    </tr>

    <tr>
        <td colspan="4">-Memahami <br>
                        -Bisa <br>
                        -Baik <br>
        </td>
        <td colspan="12">Ekspektasi Khusus Pimpinan : <br>
                        baik</td>
    </tr>
    <br>
    
</table>
<br/>
<br/>
<br/>
<table style="min-width: 21cm;" class="text-center">
    <tr>
        <td style="width: 50%">
            Jakarta, <br/>
            Pegawai Negeri Sipil Yang Dinilai,
            <div style="height: 185px"></div>
            Pegawai Yang Dinilai,
            
        </td>
        <td style="width: 50%">
            Jakarta, <br/>
            Pegawai Negeri Sipil Yang Dinilai,
            <div style="height: 185px"></div>
            Pegawai Yang Dinilai,
        </td>
    </tr>
    
</table>
<br/>
<br/>
<br/>
<br/>