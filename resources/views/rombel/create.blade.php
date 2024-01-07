@extends('layouts.template')

@section('content')
<form action="{{ route('rombel.store') }}" method="POST" class="card p-4 mt-5">
    @csrf
    <div class="justify-content-start jumbotron py-3" style="line-height: 5px; padding-bottom:30px;">
      <div class="justify-content-start jumbotron py-3" style="line-height: 5px; padding-bottom:30px;">
        <h4>Tambah Data Rombel</h4>
        <a href="/dashboard" class="btn btn-secondary" style="color: white;" >Home </a>
        <a>||</a>
        <a href="{{route('rombel.index')}}" class="btn btn-secondary" style="color: white;">Data Rombel </a> 
        <a>||</a>
        <a href="{{route('rombel.create')}}" class="btn btn-secondary" style="color: white;">Tambah Data Rombel </a> 
      </div>
    <div class="mb-3 row ">
        <label for="rombel" class="col-sm-2 col-form-label @error('rombel') is-invalid @enderror">Rombel :</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control" id="rombel" name="rombel" value="{{ old('rombel') }}">
          @error('rombel')
          <div class="text-danger ">{{$message}}</div>
          @enderror
    </div>
    <button type="submit" class="btn btn-info mt-3" style="color: white">Submit</button>
    </form>

@endsection