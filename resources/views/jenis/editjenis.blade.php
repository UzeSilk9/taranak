@extends('Layout.template')

@section('title')
Edit Data
@endsection

@section('content')
<form action="{{route('update',$jenis->id)}}" method="post" enctype="multipart/form-data">
@csrf
<div class="flex flex-col gap-2">
    <label for="">jenis</label>
    <input type="text" name="jenis" value="{{$jenis->jenis}}" class="p-2 border rounded-md">
    <span>{{$errors->first('jenis')}}</span>
</div>
<div class="flex flex-col gap-2">
    <label for="">deskripsi</label>
    <input type="text" name="deskripsi" value="{{$jenis->deskripsi}}" class="p-2 border rounded-md">
    <span>{{$errors->first('deskripsi')}}</span>
</div>
<div class="flex justify-end">
    <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
</div>
</form>
@endsection

