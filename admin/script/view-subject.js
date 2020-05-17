$(document).ready(function(){  
      $('.view_subject').click(function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"phpfunction/myfunction.php",  
                method:"post",  
                data:
                {

                  view_course:1,
                  id:id
                },  
                success:function(data){  
                     $('#subject_detail').html(data);  
                     $('#dataSubject').modal("show");  
                }  
           });  
      });  
 });  
