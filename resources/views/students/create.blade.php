@extends('students.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Tambahkan Data</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('students.store') }}" method="POST">

    @csrf

  

     <div class="row">

     

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin :</strong>

                <select class="form-control" name="jk">
                    <option value = "Perempuan"> Perempuan </option>
                    <option value ="Laki-laki"> Laki-laki </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama :</strong>

                <select class="form-control" name="agama">
                    <option value = "Islam"> Islam </option>
                    <option value ="Kristen"> Kristen </option>
                    <option value = "Islam"> Buddha </option>
                    <option value ="Kristen"> Hindu </option>
                    <option value = "Islam"> Konghucu </option>
                </select>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Asal Sekolah:</strong>

                <input type="text" name="asal_smp" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jurusan:</strong>
                <select class="form-control" name="jurusan">
                    <option value ="TBG"> Tataboga </option>
                    <option value ="TBG"> Tata Busana </option>
                    <option value ="RPL"> Rekayasa Perangkat Lunak </option>
                    <option value ="MMD"> Multimedia </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn px-2 btn-sm btn-primary shadow">Submit</button>

                
        </div>

    </div>

   

</form>

@endsection