@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection 

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Rumah Dijual /</span> Tambah</h4>
    </div>

    <form action="{{ route('rumah-dijual.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-4">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Gambar</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <input class="form-control" name="image" type="file" id="formFile" required />
                </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Rumah</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input type="text" name="name" class="form-control" id="nama" placeholder="Nama" value="{{ old('name') }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="tipe">Tipe</label>
                <input type="text" name="tipe" class="form-control" id="tipe" placeholder="Tipe" value="{{ old('tipe') }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="ukuranTanah">Ukuran Tanah</label>
                <input type="number" name="ukuran_tanah" class="form-control" id="ukuranTanah" placeholder="Ukuran Tanah" value="{{ old('ukuran_tanah') }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi"  value="{{ old('lokasi') }}" required/>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label" for="kamarTidur">Kamar Tidur</label>
                  <input type="number" name="kamar_tidur" class="form-control" id="kamarTidur" placeholder="Kamar Tidur" value="{{ old('kamar_tidur') }}" required />
                </div>
                <div class="col mb-3">
                  <label class="form-label" for="kamarMandi">Kamar Mandi</label>
                  <input type="number" name="kamar_mandi" class="form-control" id="kamarMandi" placeholder="Kamar Mandi" value="{{ old('kamar_mandi') }}" required />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label" for="hargaCash">Harga Cash</label>
                  <input type="number" name="harga_cash" class="form-control" id="hargaCash" placeholder="Harga Cash" value="{{ old('harga_cash') }}" required />
                </div>
                <div class="col mb-3">
                  <label class="form-label" for="hargaDP">Harga DP</label>
                  <input type="number" name="harga_dp" class="form-control" id="hargaDP" placeholder="Harga DP" value="{{ old('harga_dp') }}" required />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="editor">Deskripsi</label>
                <textarea name="description" class="form-control" id="editor" placeholder="Deskripsi" cols="30" rows="10" required> {{ old('description') }}</textarea>
              </div>
                
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- / Content -->
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script> 
@endpush