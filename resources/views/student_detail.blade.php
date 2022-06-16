@extends('layout.layout')
@section('content')
    @foreach ($get_student as $item)
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label> Mã Học Sing : </label>
                         {{ $item->student_id }}
                    </div>
                    <div class="form-group">
                        <label> Tên Học Sing : </label>
                        {{ $item->student_name }}
                    </div>
                    <div class="form-group">
                        <label> Ngày Sing : </label>
                        {{ $item->date_of_bitrh }}
                    </div>
                    <div class="form-group">
                        <label> Nơi Sing : </label>
                        {{ $item->place_of_birth }}
                    </div>
                    <div class="form-group">
                        <label> Giới Tính : </label>
                        {{ $item->gender }}
                    </div>
                    <div class="form-group">
                        <label> Số Điện Thoại : </label>
                        {{ $item->phone }}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label> Trường Tiểu Học : </label>
                        {{ $item->school_name }}
                    </div>
                    <div class="form-group">
                        <label> Love : </label>
                        {{ $item->class }}
                    </div>
                    <div class="form-group">
                        <label> Quận/Huyện : </label>
                        {{ $item->district }}
                    </div>
                    <div class="form-group">
                        <label> Hộ Khẩu Thường Trú :</label>
                        {{ $item->permanent_residence }}
                    </div>
                    <div class="form-group">
                        <label> Dân Tộc : </label>
                        {{ $item->ethnic }}
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Điểm tổng kết love 1</th>
                        <th scope="col">Điểm tổng kết love 2</th>
                        <th scope="col">Điểm tổng kết love 3</th>
                        <th scope="col">Điểm tổng kết love 4</th>
                        <th scope="col">Điểm tổng kết love 5</th>
                        <th scope="col">Điểm tổng kết 5 năm</th>
                        <th scope="col">Điểm ưu tiên</th>
                        <th scope="col">Tổng Điểm</th>
                        <th scope="col">Ghi Chú</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->first_grade_point }}</td>
                        <td>{{ $item->second_grade_point }}</td>
                        <td>{{ $item->third_grade_point }}</td>
                        <td>{{ $item->forth_grade_point }}</td>
                        <td>{{ $item->fifth_grade_point }}</td>
                        <td>{{ $item->five_year_point }}</td>
                        <td>{{ $item->priority_point }}</td>
                        <td>{{ $item->total_point }}</td>
                        <td>{{ $item->note }}</td>
                    </tr>
    @endforeach
    </tbody>

    </table>


    </div>
@endsection
