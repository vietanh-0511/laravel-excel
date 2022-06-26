@extends('layout.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/student_detail.css') }}">
    {{-- @foreach ($get_student as $item) --}}
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label> Mã Học Sing : </label>
                            {{ $get_student->student_id }}
                        </div>
                        <div class="form-group">
                            <label> Tên Học Sing : </label>
                            {{ $get_student->student_name }}
                        </div>
                        <div class="form-group">
                            <label> Ngày Sing : </label>
                            {{ $get_student->date_of_bitrh }}
                        </div>
                        <div class="form-group">
                            <label> Nơi Sing : </label>
                            {{ $get_student->place_of_birth }}
                        </div>
                        <div class="form-group">
                            <label> Giới Tính : </label>
                            {{ $get_student->gender }}
                        </div>
                        <div class="form-group">
                            <label> Số Điện Thoại : </label>
                            {{ $get_student->phone }}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label> Trường Tiểu Học : </label>
                            {{ $get_student->school_name }}
                        </div>
                        <div class="form-group">
                            <label> Lớp : </label>
                            {{ $get_student->class }}
                        </div>
                        <div class="form-group">
                            <label> Quận/Huyện : </label>
                            {{ $get_student->district }}
                        </div>
                        <div class="form-group">
                            <label> Hộ Khẩu Thường Trú :</label>
                            {{ $get_student->permanent_residence }}
                        </div>
                        <div class="form-group">
                            <label> Dân Tộc : </label>
                            {{ $get_student->ethnic }}
                        </div>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Điểm tổng kết lớp 1</th>
                        <th scope="col">Điểm tổng kết lớp 2</th>
                        <th scope="col">Điểm tổng kết lớp 3</th>
                        <th scope="col">Điểm tổng kết lớp 4</th>
                        <th scope="col">Điểm tổng kết lớp 5</th>
                        <th scope="col">Điểm tổng kết 5 năm</th>
                        <th scope="col">Điểm ưu tiên</th>
                        <th scope="col">Tổng Điểm</th>
                        <th scope="col">Ghi Chú</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $get_student->first_grade_point }}</td>
                        <td>{{ $get_student->second_grade_point }}</td>
                        <td>{{ $get_student->third_grade_point }}</td>
                        <td>{{ $get_student->forth_grade_point }}</td>
                        <td>{{ $get_student->fifth_grade_point }}</td>
                        <td>{{ $get_student->five_year_point }}</td>
                        <td>{{ $get_student->priority_point }}</td>
                        <td>{{ $get_student->total_point }}</td>
                        <td>{{ $get_student->note }}</td>
                    </tr>
                </tbody>

            </table>


        </div>
    {{-- @endforeach --}}
@endsection
