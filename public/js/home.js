/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#btn_eighteenplus').click(function(){
      
    window.get_students_older_than_eighteen();
});

$('#btn_all_students').click(function(){
    location.reload();
});

$('#btn_classeight').click(function(){
    
     window.get_class_eight_students_in_2010();
});

$('#btn_class_and_parent').click(function(){

    $('#section_01').hide('slow');
});



function get_students_older_than_eighteen() {

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'eighteenPlus',
            type     : 'get',
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                    $('#topic').empty().html('Students Older Than 18');
                    var row;
                  jQuery.each(response.eighteenPlus, function(index, value) {
                      row += '<tr><td>'+value.name+'</td><td>'+value.dob+'</td><td>'+value.dob+'</td><td>'+value.city+'</td></tr>';
                      $('#tBodyStudents').empty().append(row);
                  });
                  
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
    }
    
    
     function get_class_eight_students_in_2010() {

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'classEight',
            type     : 'get',
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                    $('#topic').empty().html('Students In Class 8 In Year 2010');
                    var row;
                  jQuery.each(response.classEight, function(index, value) {
                      row += '<tr><td>'+value.name+'</td><td>'+value.dob+'</td><td>'+value.dob+'</td><td>'+value.city+'</td></tr>';
                      $('#tBodyStudents').empty().append(row);
                  });
                  
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
    }
    
    
    function create_student_select_box(){
        
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url      : 'loadAllStudents',
            type     : 'get',
            dataType : 'json',
            cache    : false,
            success  : function(response) { 
                if(response.success === true) {
                    $('#topic').empty().html('Students In Class 8 In Year 2010');
                    var row;
                  jQuery.each(response.classEight, function(index, value) {
                      row += '<tr><td>'+value.name+'</td><td>'+value.dob+'</td><td>'+value.dob+'</td><td>'+value.city+'</td></tr>';
                      $('#tBodyStudents').empty().append(row);
                  });
                  
                } else {
                    
                }
            },
            error    : function(e) {
                 console.log(e.responseText);
            }
        });
    }