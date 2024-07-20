@extends('Layout.template')

@section('title')
Halaman Dashboard

@endsection

@section('content')
 
 <!--Main-->
 <main class="bg-white-500 flex-1 p-3 overflow-hidden">

    <div class="flex flex-col">
           
        <!--Grid Form-->

        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b text-center">
                    Tabel Data Hewan
                </div>
                <div>
                    <a href=" {{ route('tambahhewan') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
                </div>
                <div class="p-3">
                    <table class="table-responsive w-full rounded">
                        <thead>
                          <tr>
                            <th class="border w-1/6 px-4 py-2">No</th>
                            <th class="border w-1/6 px-4 py-2">Nama</th>
                            <th class="border w-1/6 px-4 py-2">Id Jenis</th>
                            <th class="border w-1/6 px-4 py-2">Jenis Kelamin</th>
                            <th class="border w-1/6 px-4 py-2">Umur</th>
                            <th class="border w-1/6 px-4 py-2">Foto</th>
                            <th class="border w-1/12 px-4 py-2">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($hewan as $i => $a)
                            <tr>
                                <td class="border px-4 py-2">{{$i+1}}</td>
                                <td class="border px-4 py-2">{{$a->nama}}</td>
                                <td class="border px-4 py-2">{{$a->id_jenis }}</td>
                                <td class="border px-4 py-2">{{$a->jeniskelamin }}</td>
                                <td class="border px-4 py-2">{{$a->umur }}</td>
                                <td class="border border-red-700 p-3"><img class="max-w-32" src="{{asset('foto/'.$a->foto)}}" alt=""></td>
                                {{-- <td class="border px-4 py-2">
                                    <i class="fas fa-check text-green-500 mx-2"></i>
                                </td> --}}
                                <td class="flex border px-4 py-2 justify-center">
                                    {{-- <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-eye"></i></a> --}}
                                    <a href="" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-edit"></i></a>
                                    <a href="" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                            <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/Grid Form-->
    </div>
</main>
<!--/Main-->
@endsection