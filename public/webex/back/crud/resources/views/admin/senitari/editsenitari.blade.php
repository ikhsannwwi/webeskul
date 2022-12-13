@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    {{-- <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Ekstrakurikuler</th>
                        <th>Logo Eskul</th>
                        <th>Pembina</th>
                        <th>Ketua</th>
                        <th>Wakil Ketua</th>
                        <th>Jadwal Eskul</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Program Kerja</th>
                        <th>Instagram</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    
                      <tbody>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->logo}}</td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>



                      </tr>
                    @endforeach
                    
                    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section> --}}



      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/updatesenitari/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" value="{{$data->nama_eskul}}" name="nama_eskul" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                      <input type="file" class="form-control" value="{{$data->logo}}" name="logo" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pembina</label>
                    <input type="text" class="form-control" value="{{$data->pembina}}" name="pembina" id="exampleInputPassword1" placeholder="Masukan Nama Pembina">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ketua</label>
                    <input type="text" class="form-control" value="{{$data->ketua}}" name="ketua" id="exampleInputPassword1" placeholder="Masukan Nama Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Wakil Ketua</label>
                    <input type="text" class="form-control" value="{{$data->wakilketua}}" name="wakilketua" id="exampleInputPassword1" placeholder="Masukan Jadwal Wakil Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Ekstrakurikuler</label>
                    <input type="text" class="form-control" value="{{$data->jadwal_kumpulan}}" name="jadwal_kumpulan" id="exampleInputPassword1" placeholder="Masukan Nama Ekstrakurikuler, Contoh (Senin dan Jumat)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Visi</label>
                    <input type="text" class="form-control" value="{{$data->visi}}" name="visi" id="exampleInputPassword1" placeholder="Masukan Nama Visi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Misi</label>
                    <input type="text" class="form-control" value="{{$data->misi_eskul}}" name="misi_eskul" id="exampleInputPassword1" placeholder="Masukan Nama Misi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Program Kerja</label>
                    <input type="text" class="form-control" value="{{$data->program_kerja}}" name="program_kerja" id="exampleInputPassword1" placeholder="Masukan Nama Program Kerja">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" class="form-control" value="{{$data->nama_instagram}}" name="nama_instagram" id="exampleInputPassword1" placeholder="Masukan Nama Instagram Contoh (@senitari)">
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            