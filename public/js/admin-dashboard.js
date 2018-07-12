/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
   window.load_all_courses(); 
   window.load_all_students(); 
});

$('#btn_add_course').click(function(){
   window.add_new_course();
});

$('#btn_change_course_details').click(function(){
    
});


$('#btn_add_student').click(function(){
   window.add_new_student();
});

$('#btn_add_parent').click(function(){
   window.add_new_parent();
});


function add_new_course() {
    
     var courseName  = $('#course_name').val();
     var courseYear  = $('#course_year').val();
    
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'addNewCourse',
            type     : 'get',
            dataType : 'json',
            data     : {'course_name':courseName,'course_year':courseYear},
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                      window.load_all_courses();
                      $('#course_name').val(' ');
                      $('#course_year').val(' ');
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
   }
   
   
   function add_new_student() {
    
     var studentName    = $('#student_name').val();
     var studentCourse  = $('#student_course').val();
     var studentDob     = $('#student_dob').val();
     var studentCity    = $('#student_city').val();
     
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'addNewStudent',
            type     : 'get',
            dataType : 'json',
            data     : {student_name:studentName,student_course:studentCourse,student_dob:studentDob,student_city:studentCity},
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                      window.load_all_students();
                      
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
   }
   
   
    function add_new_parent() {
    
     var parentName     = $('#parent_name').val();
     var parentGender   = $('#parent_gender').val();
     var studentName    = $('#students_list').val();
     var parentDob      = $('#parent_dob').val();
     
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'addNewParent',
            type     : 'get',
            dataType : 'json',
            data     : {parent_name:parentName,parent_gender:parentGender,student_name_for_parent:studentName,parent_dob:parentDob},
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                      window.load_all_students();
                      
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
   }
   
   
   
   function load_all_courses(){
       
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'allCourses',
            type     : 'get',
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                
                if(response.success === true) {
                    var row = "";
                    var option = "";
                    
                     jQuery.each(response.data, function(index, value) {
                         row += '<tr><td>'+value.name+'</td><td>'+value.year+'</td><td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="show_alert('+value.id+',\'' + value.name + '\','+value.year+')">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" id="btn_delete_course" onclick="delete_course('+value.id+')">Delete</button></td></tr>';
                         option += "<option value ="+value.id+">"+value.name+"</option>";
                     });
                      
                     $('#course_tbl_body').empty().append(row);
                     $('#course_list').empty().html(option);
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        }); 
   }
   
   
   
     function load_all_students(){
       
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'allStudents',
            type     : 'get',
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                
                if(response.success === true) {
                    var row = "";
                    var option = "";
                    
                     jQuery.each(response.data, function(index, value) {
                         row += '<tr><td>'+value.name+'</td><td>'+value['course'].name+'</td><td>'+value.dob+'</td><td>'+value.city+'</td><td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="show_alert('+value.id+',\'' + value['course'].name + '\','+value.dob+')">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" id="btn_delete_course" onclick="delete_course('+value.id+')">Delete</button></td></tr>';
                         option += "<option id ="+value.id+">"+value.name+"</option>";
                     });
                    
                     $('#student_tbl_body').empty().append(row);
                     $('#students_list').empty().html(option);
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        }); 
   }


function show_alert(course_id,course_name,course_year) {
    $('#course_to_be_changed').empty().val(course_name);
    $('#course_year_to_be_changed').empty().val(course_year);
}

function delete_course(course_id){
    
     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'deleteCourse',
            type     : 'get',
            data     : {course_id : course_id},
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                
                if(response.success === true) {
                  window.load_all_courses();
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });  
}

function change_course_details(){
    
}