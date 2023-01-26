@extends ('layout.header')
  
@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="/">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Tentang Kami</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Sejarah Visi dan Misi</a>
            </div>

            {{--  --}}

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-header -type-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">

              <h1 class="page-header__title">Pendaftaran Ekstrakulikuler</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-11">
          

          <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
            <div class="shopCompleted-footer__wrap">
              <div data-anim="slide-up delay-3" class="row justify-center">
                <form class="" action="/insertdataanggota" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Anggota</label>
                      <input required type="text" class="form-control" name="nama_anggota" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                      <input required type="number" class="form-control" name="nis" id="exampleInputEmail1" placeholder="Masukan Nomor Induk Siswa">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kelas Anggota</label>
                      <select class="custom-select rounded-0" name="kelas_anggota" id="exampleSelectRounded0">
                        <option selected>Open this select menu</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jurusan</label>
                      <select class="custom-select rounded-0" name="jurusan" id="exampleSelectRounded0">
                        <option selected>Open this select menu</option>
                        <option value="PPL/SIJA">PPL/SIJA</option>
                        <option value="AKL">AKL</option>
                        <option value="OTP">OTP</option>
                        <option value="BDP">BDP</option>
                        <option value="MLG">MLG</option>
                        <option value="FKK">FKK</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MTM">MTM</option>
                        <option value="TLM">TLM</option>
                        <option value="TET">TET</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Ekstrakurikuler</label>
                      <select class="custom-select rounded-0" name="id_eskul" id="exampleSelectRounded0">
                          
                          <option selected>Open this select menu</option>
                          @foreach ($data_eskul as $row)
                          <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                          @endforeach
                        
                      </select>
                    </div>
                    
                    
  
                    
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection