@extends('layout.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/student_detail.css') }}">
    <div class="card-header">
        <h3 class="text-center">Student Search</h3>
    </div>
    <div class="container">
        <div class="search">
            <form action="{{ url('/') }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tìm Kiếm Theo Mã Học Sing</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Mã Học Sing" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tìm Kiếm Theo Tên</label>
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Tên Học Sing">
                </div>

                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
            </form>
        </div>


        <a href="{{ url('/delete') }}">clear table</a>

        <div class="content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>name</th>
                        <th>DoB</th>
                        <th>PoB</th>
                        <th>gender</th>
                        <th>phone</th>
                        <th>school</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0; ?>
                    @foreach ($get_students as $item)
                        <tr>
                            <td> <?php echo $count += 1; ?></td>
                            <td>{{ $item->student_id }}</td>
                            <td>{{ $item->student_name }}</td>
                            <td>{{ $item->date_of_bitrh }}</td>
                            <td>{{ $item->place_of_birth }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->school_name }}</td>
                            <td><a class="btn"
                                    href='{{ url('student_detail/' . $item->student_id) }}'>details</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    @endsection
