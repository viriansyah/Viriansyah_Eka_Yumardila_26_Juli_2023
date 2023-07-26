@extends('Layout.template')
<!-- START DATA -->
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{url('pegawai')}}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{url('pegawai/create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-4">Name</th>
                <th class="col-md-4">Jabatan</th>
                <th class="col-md-4">Umur</th>
                <th class="col-md-4">Alamat</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=$data->firstItem()?>
            @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>{{$item->umur}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>
                        <a href='{{url('pegawai/'.$item->name.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin Delete Data?')" class="d-inline" action="{{url('pegawai/'.$item->name)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                    <?php $i++ ?>
            @endforeach
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" name="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
            </tbody>
        </table>
        {{$data->withQueryString()->links()}}
    </div>
    <!-- AKHIR DATA -->
@endsection


