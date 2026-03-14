@extends('theme.ui')

@section('container')
    <div class="container mt-4">
        <h1 class="mb-4 fw-bold text-primary">Daftar Mahasiswa</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Fakultas</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Aldi Pratama</td>
                        <td>Industri Kreatif</td>
                        <td>Teknik Industri</td>
                        <td class="text-center">5</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Siti Nurhaliza</td>
                        <td>Industri Kreatif</td>
                        <td>Teknik Informatika</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Rizky Fadillah</td>
                        <td>Industri Kreatif</td>
                        <td>Desain Komunikasi Visual</td>
                        <td class="text-center">7</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Nina Kartika</td>
                        <td>Ekonomi dan Bisnis</td>
                        <td>Bisnis Digital</td>
                        <td class="text-center">2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection