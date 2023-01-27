@extends ('layout.header')
  
@section('content')


  <section class="page-header -type-4 bg-beige-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">
              <h1 class="page-header__title">Pendaftaran Ekstrakurikuler</h1>
            </div>

            <div data-anim="slide-up delay-2">
              <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between">
        <div class="col-xl-5 col-lg-6">
          <h3 class="text-24 lh-1 fw-500">Our offices</h3>
          <div class="row y-gap-30 pt-40">

            <div class="col-sm-6">
              <div class="text-20 fw-500 text-dark-1">London</div>
              <div class="y-gap-10 pt-15">
                <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                <a href="#" class="d-block">+(1) 123 456 7890</a>
                <a href="#" class="d-block">hi@educrat.com</a>
              </div>
            </div>

            

          </div>
        </div>

        <div class="col-lg-6">
          <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
            <h3 class="text-24 fw-500">Masukan Data anda</h3>
            <p class="mt-25">Pilih Ekstrakurikuler sesuai dengan kemauan anda<br> tincidunt egetnvallis.</p>

            
                @foreach ($on as $item)
                @if ($item->on == 1)
            <a href="/list-eskul-pendaftaran" >Lihat Data Calon Ekstrakurikuler</a>

            <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="/insertdatapendaftaran" method="POST">
              @csrf
              <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nomor Induk Siswa</label>
                <input type="number" name="nis" placeholder="Nomor Induk Siswa...">
              </div>
              <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Siswa</label>
                <input type="text" name="nama_calon_anggota" placeholder="Nama Siswa...">
              </div>
              <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Kelas Anggota</label>
                <select class="custom-select rounded-0" name="kelas_calon_anggota" id="exampleSelectRounded0">
                  <option selected>Open this select menu</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Jurusan</label>
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
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Nama Ekstrakurikuler</label>
                <select class="custom-select rounded-0"  name="id_eskul" id="exampleSelectRounded0">
                  <option selected>Open this Select Menu</option>
                  @foreach ($data_eskul as $row)
                  <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Alasan Masuk Ekstrakurikuler tersebut</label>
                <textarea type="text" name="alasan" placeholder="Alasan..."></textarea>
              </div>
              <div class="col-12">
                <button type="submit" id="submit" class="button -md -purple-1 text-white">
                  Send Message
                </button>
              </div>
            </form>
              @else
              
                    <h3 class="my-5 text-center"><strong>Pendaftaran ditutup</strong></h3>
              @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection