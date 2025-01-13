@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Pengaturan Page</h1>
    </div>
    @if(Session::has('pesan'))
          <div class="alert alert-success">{{ Session::get('pesan') }}</div>
    @endif
    <form action="{{ route('delete.voting') }}" method="POST">
      @csrf
      <button onclick="return confirm('yakin menghapus data tabel?')" type="submit" class="btn btn-primary">Hapus data voting</button>
    </form>
    <h2>Buat sesi voting</h2>
    <form action="{{ route('pengaturan.tambah') }}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul voting</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namakeg" required>
  </div>
  <div class="mb-3">
    <label for="start" class="form-label">Start</label>
    <input type="datetime-local" class="form-control" id="start" aria-describedby="emailHelp" name="start" required>
  </div>
  <div class="mb-3">
    <label for="end" class="form-label">End</label>
    <input type="datetime-local" class="form-control" id="end" aria-describedby="emailHelp" name="end" required>
  </div>
  <button type="submit" class="btn btn-primary">buat sesi</button>
</form>
<h2>Sesi voting</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Start</td>
            <td>End</td>
            <td>Countdown</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($pgt as $pgt)
        <tr>
            <td>{{ $pgt->no_sesi }}</td>
            <td>{{ $pgt->nama_kegiatan }}</td>
            <td>{{ $pgt->dt_mulai }}</td>
            <td>{{ $pgt->dt_akhir }}</td>
            <td>
            <script>
                    CountDownTimer('{{$pgt->dt_mulai}}', 'countdown{{ $pgt->no_sesi }}');
                    function CountDownTimer(dt, id)
                    {
                      var end = new Date('{{$pgt->dt_akhir}}');
                      var _second = 1000;
                      var _minute = _second * 60;
                      var _hour = _minute * 60;
                      var _day = _hour * 24;
                      var timer;
                      function showRemaining() {
                        var now = new Date();
                        var distance = end - now;
                        if (distance < 0) {
                          clearInterval(timer);
                          document.getElementById(id).innerHTML = '<b>Pemilihan Berakhir</b> ';
                          return;
                        }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);

                        document.getElementById(id).innerHTML = days + ' : ';
                        document.getElementById(id).innerHTML += hours + ' : ';
                        document.getElementById(id).innerHTML += minutes + ' : ';
                        document.getElementById(id).innerHTML += seconds + '';
                      }
                      timer = setInterval(showRemaining, 1000);
                    }
                  </script>
                  <div id="countdown{{ $pgt->no_sesi }}"></div>
            </td>
            <td>
              <form action="{{ route('pengaturan.delete', $pgt->no_sesi) }}" method="POST">
                @csrf
                <button onclick="return confirm('hapus pengaturan? ')" type="submit" class="btn btn-danger btn-sm">Hapus</button>
              </form>
              
              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pgt->no_sesi}}">Update</button>
            </td>
        </tr>



        <div class="modal fade" id="exampleModal{{$pgt->no_sesi}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pengaturan.update', $pgt->no_sesi) }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail{{$pgt->no_sesi}}" class="form-label">Judul voting</label>
            <input type="text" class="form-control" id="exampleInputEmail{{$pgt->no_sesi}}" value="{{$pgt->nama_kegiatan}}" aria-describedby="emailHelp" name="namakeg" required>
          </div>
          <div class="mb-3">
            <label for="start{{$pgt->no_sesi}}" class="form-label">Start</label>
            <input type="datetime-local" class="form-control" id="start{{$pgt->no_sesi}}" value="{{$pgt->dt_mulai}}" aria-describedby="emailHelp" name="start" required>
          </div>
          <div class="mb-3">
            <label for="end{{$pgt->no_sesi}}" class="form-label">End</label>
            <input type="datetime-local" class="form-control" id="end{{$pgt->no_sesi}}" value="{{$pgt->dt_akhir}}" aria-describedby="emailHelp" name="end" required>
          </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      
      </div>
    </div>
  </div>
</div>
        @endforeach 
    </tbody>
</table>
@endsection
