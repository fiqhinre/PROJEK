@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('kategorihewan.store') }}">
  @csrf

  <fieldset>
    <legend>MASUKKAN NAMA HEWAN</legend>
    <div class="mb-3">
      <label for="NAMA_HEWAN" class="form-label">Nama Hewan</label>
      <input type="text" name="NAMA_HEWAN" id="NAMA_HEWAN" class="form-control" value="{{ old('NAMA_HEWAN') }}" placeholder="nama hewan">
    </div>
   
    
    </div>
    <button type="submit" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Submit</button>
  </fieldset>
</form>
  @endsection