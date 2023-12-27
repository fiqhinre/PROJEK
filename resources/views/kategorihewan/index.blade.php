@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <legend>KATEGORI HEWAN</legend>
        <a href="{{ route('kategorihewan.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
<br> </br>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Hewan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($kathew as $kathewan)
      <tr>
        <td>{{ $kathewan->id_kategorihewan }}</td>
        <td>{{ $kathewan->NAMA_HEWAN }}</td>
        <td>
            <div class="btn-group" role="group">
                <a href="{{ route('kategorihewan.edit', $kathewan->id_kategorihewan) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kategorihewan.destroy', $kathewan->id_kategorihewan) }}" method="POST" style="margin-left: 5px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                </form>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection