@extends('Layout.template')

@section('title')

@endsection

@section('content')

<!--Main-->
<main class="bg-white-300 flex-1 p-3 overflow-hidden">

    <div class="flex flex-col">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Hewan</label>
                <input type="text" name="jenis" value="{{old('hewan')}}" class="p-2 border rounded-md">
                <span>{{$errors->first('jenis')}}</span>
            </div>
            <div class="form-group">
                <label for="">Id Jenis</label>
                <select name="id_jenis" class="form-control" >
                    <option value="">pilih</option>
                    @foreach ($jenis as $j)
                    
                    <option value="{{ $j->id_jenis }}">{{ $j->jenis }}</option>
                    @endforeach
                </select>
                <span>{{$errors->first('id_jenis')}}</span>
            </div>
            {{-- <div class="form-group">
                <label for="">Telpon</label>
                <input type="text" name="telpon" value="{{old('telpon')}}" class="p-2 border rounded-md">
                <span>{{$errors->first('telpon')}}</span>
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" class="p-2 border rounded-md">
                <span>{{$errors->first('foto')}}</span>
            </div> --}}
            <div class="form-group">
                <button type="submit" class="bg-blue-500 w-1/8 p-2 rounded-md text-white">Simpan</button>
            </div>
        </form>
        
    </div>
</main>
<!--/Main-->


@endsection