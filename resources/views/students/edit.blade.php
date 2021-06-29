@extends('students.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Data</h2>

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

  

    <form action="{{ route('students.update',$student->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

          
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama</strong>

                    <input type="text" name="nama" value="{{ $student->nama }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Kelamin :</strong>

                <select class="form-control" name="jk">
                <option value = "Perempuan"{{$student->jk === "Perempuan" ? "selected" : ""}}> Perempuan</option>
                <option value ="Laki-laki" {{$student->jk === "Laki-laki" ? "selected" : ""}}> Laki-laki </option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Alamat</strong>

                    <input type="text" name="alamat" value="{{ $student->alamat }}" class="form-control" >

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama </strong>

                <select class="form-control" name="agama">
                <option value = "Islam"{{$student->agama === "Islam" ? "selected" : ""}}> Islam</option>
                <option value ="Kristen" {{$student->agama === "Kristen" ? "selected" : ""}}> Kristen </option>
                <option value = "Buddha"{{$student->agama === "Buddha" ? "selected" : ""}}> Buddha</option>
                <option value ="Hindu" {{$student->agama === "Hindu" ? "selected" : ""}}> Hindu </option>
                <option value = "Konghucu"{{$student->agama === "Konghucu" ? "selected" : ""}}> Konghucu</option>
                </select>

            </div>

        </div>



            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Asal SMP</strong>

                    <input type="text" name="asal_smp" value="{{ $student->asal_smp }}" class="form-control" >

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jurusan:</strong>

                    <select class="form-control" name="jurusan">
                        <option value = "TBG"{{$student->jurusan === "TBG" ? "selected" : ""}}> TataBoga</option>
                        <option value = "TBS"{{$student->jurusan === "TBS" ? "selected" : ""}}> Tata Busana</option>
                        <option value ="RPL" {{$student->jurusan === "RPL" ? "selected" : ""}}> Rekayasa Perangkat Lunak </option>
                        <option value ="MMD" {{$student->jurusan === "MMD" ? "selected" : ""}}> Multimedia </option>
                    </select>
                </div>

            </div>



              <button type="submit" class="btn px-2 btn-sm btn-primary shadow">Submit</button>

            

        </div>

   

    </form>

@endsection