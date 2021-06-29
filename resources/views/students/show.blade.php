@extends('students.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Pendaftar</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Daftar:</strong>

                {{ $student->no_daftar }}

            </div>

        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $student->nama }}

            </div>

        </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin:</strong>

                {{ $student->jk }}

            </div>

        </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {{ $student->alamat }}

            </div>

        </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama:</strong>

                {{ $student->agama }}

            </div>

        </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Asal SMP:</strong>

                {{ $student->asal_smp }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jurusan:</strong>

                {{ $student->jurusan }}

            </div>

        </div>

    </div>

@endsection