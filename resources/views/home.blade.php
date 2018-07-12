@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class ="row">
                        <div class="col-md-2"><button type="button" class="btn btn-default btn-sm" id="btn_all_students">All Students</button></div>
                        <div class="col-md-2"><button type="button" class="btn btn-default btn-sm" id="btn_eighteenplus">Older Than 18</button></div>
                        <div class="col-md-2"><button type="button" class="btn btn-default btn-sm" id="btn_classeight">Class 8 in 2010</button></div>
                        <div class="col-md-2"><button type="button" class="btn btn-default btn-sm" id="btn_class_and_parent">Class & Parent</button></div>
                        <div class="col-md-2"><button type="button" class="btn btn-default btn-sm">Older Than 16 & Having Parents Older Than 50</button></div>
                    </div>
                </div>

                <div class="card-body" id="section_01">
                    <span id="topic">All Students</span>
                    <table class="table" id="tblStudents">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Course</th>
                                <th>DOB</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody id="tBodyStudents">

                            @if (!empty($students)) 
                            @foreach ($students as $index => $student)
                            <tr>
                                <td>{{$student['name'] }}</td>
                                <td>{{$student['course']['name'] }}</td>
                                <td>{{$student['dob'] }}</td>
                                <td>{{$student['city'] }}</td>
                            </tr>
                            @endforeach
                            @endif


                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </div>
    </div>




</div>

@section('scripts')
   <script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@endsection
