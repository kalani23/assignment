@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Course
                </div>

                <div class="card-body" id="section_01">

                    <div>
                        <input id="course_name" type="text" class="form-control" name="course_name"  placeholder="Course Name" required>
                    </div>
                    <hr>
                    <div>
                        <input id="course_year" type="text" class="form-control" name="course_year" placeholder="Course Year" required>
                    </div>
                    <hr>
                    <div>
                        <button type="button" id="btn_add_course" class="btn btn-primary btn-sm">Add Course</button>
                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All Courses
                </div>

                <div class="card-body" id="section_01">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="course_tbl_body">


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Student
                </div>

                <div class="card-body" id="section_01">

                    <div>
                        <input id="student_name" type="text" class="form-control" name="student_name" placeholder="Student Name" required>
                    </div>
                    <hr>
                    <div>
                        <select id="course_list"  class="form-control" name="course_list" >

                        </select>
                    </div>
                    <hr>
                    <div>
                        <input id="student_dob" type="date" class="form-control" name="student_dob" placeholder="Date Of Birth" required>
                    </div>
                    <hr>
                    <div>
                        <input id="student_city" type="text" class="form-control" name="student_city" placeholder="City" required>
                    </div>
                    <br>
                    <div >
                        <button type="button" class="btn btn-primary btn-sm" id="btn_add_student">Add Student</button>
                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All Students
                </div>

                <div class="card-body" id="section_01">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>DOB</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="student_tbl_body">


                        </tbody>
                    </table>

                </div>

            </div>
        </div>



    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Parents
                </div>

                <div class="card-body" id="section_01">

                    <div>
                        <input id="parent_name" type="text" class="form-control" name="parent_name" placeholder="Parent Name" required>
                    </div>
                    <hr>
                    <div>
                        <select id="parent_gender"  class="form-control" name="parent_gender">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>

                    <hr>
                    <div>
                        <select id="students_list"  class="form-control" name="students_list">

                        </select>
                    </div>
                    <hr>
                    <div>
                        <input id="parent_dob" type="date" class="form-control" name="parent_dob" placeholder="Date Of Birth"  required>
                    </div>
                    <hr>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" id="btn_add_parent">Add Parent</button>
                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All Parents
                </div>

                <div class="card-body" id="section_01">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Parent Name</th>
                                <th>Student Name</th>
                                <th>Parent DOB</th>
                                <th>Parent Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="parent_tbl_body">
                            

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <input id="course_to_be_changed" type="text" class="form-control" name="course_to_be_changed"  required><br>
                <input id="course_year_to_be_changed" type="text" class="form-control" name="course_year_to_be_changed" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_change_course_details">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@section('scripts')
<script src="{{ asset('js/admin-dashboard.js') }}" defer></script>
@endsection

@endsection
