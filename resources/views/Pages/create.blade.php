@extends('Layout.template')
@section('konten')
    <form action='{{url('pegawai')}}' method='post'>
        @csrf
        <label>
            Name
        </label>
        <input type="text" name="name"/>
        <br/>
        <label>
            Jabatan
        </label>
        <input type="text" name="jabatan"/>
        <br/><label>
            Umur
        </label>
        <input type="text" name="umur"/>
        <br/><label>
            Alamat
        </label>
        <input type="text" name="alamat"/>
        <br/>
        <button type="submit">Submit</button>
    </form>

@endsection
