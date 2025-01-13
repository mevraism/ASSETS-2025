@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Kandidat Page</h1>
        @if(Session::has('pesan'))
          <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
    </div>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Kandidat
    </button>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>No urut</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Angkatan</th>
            <th>Visi</th>
            <th>Misi</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($kandidat_tabel as $kdt)
        <tr>
            <td>{{ $kdt->no_urut }}</td>
            <td><img src="{{getAssetDir('thumb/'.$kdt->foto) }}" alt="" style="width:75px;height:100px;"></td>
            <td>{{ $kdt->nama }}</td>
            <td>{{ $kdt->nim }}</td>
            <td>{{ $kdt->angkatan }}</td>
            <td>{{ $kdt->visi }}</td>
            <td>{{ $kdt->misi }}</td>
            <td>
            <form action="{{ route('kandidat.delete', $kdt->no_urut) }}" method="POST">
                @csrf
                <button class="btn btn-danger" onclick="return confirm('hapus kandidat? ')" type="submit">Hapus</button>
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $kdt->no_urut }}">
                  Update
            </button>
            </td>
        </tr>

        <div class="modal fade" id="exampleModal{{ $kdt->no_urut }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('kandidat.update', $kdt->no_urut) }}" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="nama{{ $kdt->no_urut }}" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama{{ $kdt->no_urut }}" value="{{ $kdt->nama }}" aria-describedby="emailHelp" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1{{ $kdt->no_urut }}" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="exampleInputPassword1{{ $kdt->no_urut }}" value="{{ $kdt->nim }}" name="nim" required>
                    </div>
                     <select class="form-select" aria-label="Default select example" name="angkatan" required>
                        <option selected>{{ $kdt->angkatan }}</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                     </select>

                     <div class="mb-3">
                        <label for="visi{{ $kdt->no_urut }}" class="form-label">Visi</label>
                        <textarea class="form-control" id="visi{{ $kdt->no_urut }}" name="visi" required>{{ $kdt->visi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="misi{{ $kdt->no_urut }}" class="form-label">Misi</label>
                        <div class="form-text">isi dengan menggunakan separator "," (koma). Ex: " Pintar, Baik hati, Rajin Menabung" tanpa tanda kutip.</div>
                        <textarea class="form-control" id="misi{{ $kdt->no_urut }}" name="misi" required>{{ $kdt->misi }}</textarea>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div> 
                </form>
              
            </div>
          </div>
        </div>
        @endforeach
    </tbody>
</table>








































    <!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kandidat.tambah') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
                <label for="nomor" class="form-label">No urut</label>
                <input type="text" class="form-control" id="nomor" aria-describedby="emailHelp" name="nomor" maxlength="2" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nim" required>
            </div>
             <select class="form-select" aria-label="Default select example" name="angkatan" required>
                <option selected disabled>Angkatan</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
             </select>

             <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>

             <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <textarea class="form-control" id="visi" name="visi" required></textarea>
            </div>

            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <div class="form-text">isi dengan menggunakan separator "," (koma). Ex: " Pintar, Baik hati, Rajin Menabung" tanpa tanda kutip.</div>
                <textarea class="form-control" id="misi" name="misi" required></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
