@extends('students.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            <h1>Formulir pendaftaran peserta didik baru (PPDB) SMK Semangat 45</h1>

        </div>

            <div class="pull-right">


                <a class="btn btn-success" href="{{ route('students.create') }}"> Tambahkan Data </a>


            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No Daftar</th>

            <th>Nama</th>

            <th>Jenis Kelamin</th>

            <th>Alamat</th>

            <th>Agama</th>

            <th>Asal SMP</th>

            <th>Jurusan</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($students as $student)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $student->nama }}</td>

            <td>{{ $student->jk }}</td>

            <td>{{ $student->alamat }}</td>

            <td>{{ $student->agama }}</td>

            <td>{{ $student->asal_smp }}</td>

            <td>{{ $student->jurusan }}</td>

            <td>

                <form action="{{ route('students.destroy',$student->id) }}" method="POST">

   

                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                    <a href="{{route('student.cetak', $student->id)}}" class="btn px-2 btn-sm btn-primary shadow">Print</a>
   

                    @csrf

                    @method('DELETE')


                    <button onclick="return confirm('Apakah yakin data akan di hapus ?')"type="submit"class="btn px-2 btn-sm btn-primary shadow"><i class="fa fa-trash"></i>Delete</button>



                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $students->links() !!}

      

@endsection