@extends('template')

@section('content')

 <div class="container">
  <br>
  <h2>Data Ujian</h2>
  <br>
  <a class="btn btn-primary" href="{{route('ujian.add')}}">Tambah Data</a>
  <br>
  <br>
  
  <table class="table table-bordered table-hover table-bordered" >
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">Dosen</th>
        <th scope="col">Jumlah Soal</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ujian as $ujian)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td scope="row">{{$ujian->nama_mk}}</td>
        <td scope="row">{{$ujian->dosen}}</td>
        <td scope="row">{{$ujian->jumlah_soal}}</td>
        <td scope="row">{{$ujian->keterangan}}</td>
        <td scope="row"> 
          <form action="">
            <a class="btn btn-warning" href="">Edit</a>

            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  -->
@endsection