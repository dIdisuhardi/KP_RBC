@extends('boostrap/dasar')
@section('isi_template')

    <head>
        <title>Ruang Baca Computer Engineering</title>
    </head>

    <body>
        <div class="land">
            <div class="bg-2">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 style="text-align: end"> Form Pengunjung RBC </h1>
                    </div>
                    <div class="col-sm-4" style="margin-top: 1%">
                        <button class="download" type="submit"
                            href="/">Mobile App <br> Download <br>
                            Here</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="panduan">
            <div class="faq-page">
                <div class="forms_page">
                    <form>
                        <fieldset disabled>
                            <div class="row g-10 align-items-center">
                                <div class="col-sm-2">
                                    <label for="name" class="form-label">Nama</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" id="disabledTextInput" class="form-control form"
                                        placeholder="Didi Suhardi">
                                </div>
                            </div>
                            <div class="row g-10 align-items-center">
                                <div class="col-sm-2">
                                <label for="NIM" class="form-label">NIM</label>
                                </div>
                                <div class="col-sm-7">
                                <input type="text" id="disabledTextInput" class="form-control form"
                                    placeholder="21120120130063">
                                </div>
                            </div>
                        </fieldset>
                        <div class="row g-10 align-items-center">
                            <div class="col-sm-2">
                            <label for="angkatan" class="form-label">Angkatan</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form" id="angkatan">
                        </div>
                        </div>
                        <div class="row g-10 align-items-center">
                            <div class="col-sm-2">
                        <label for="jenis_feedback" class="form-label ">Keperluan hadir</label>
                            </div>
                            <div class="col-sm-7">
                        <select id="Select" class="form-select form">
                            <option>Membaca Buku</option>
                            <option>Meminjam Buku</option>
                            <option>Kelas</option>
                            <option>Mengerjakan tugas</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <br>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary form_submit">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
