@extends('Layout.template')

@section('title')

@endsection

@section('content')

<form action="{{ route('simpan') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Jenis Hewan</label>
        <input type="text" name="jenis" value="{{old('jenis')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('jenis')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Deskripsi</label>
        <input type="text" name="deskripsi" value="{{old('deskripsi')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('deskripsi')}}</span>
    </div>
    {{-- <div class="flex flex-col gap-2">
        <label for="">Telpon</label>
        <input type="text" name="telpon" value="{{old('telpon')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telpon')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{$errors->first('foto')}}</span>
    </div> --}}
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection