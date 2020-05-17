$(document).ready(function(){
	$('.fired_applicant').click(function(){
		var id = $(this).val();
		// var subject_id = $('#subbb_id').val();
		console.log(id);
		// var username = $('#username').val();
		// var srn = $('#srn').val();
		// console.log(username);
		// console.log(srn);
		// alert(id);
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, Proceed it!'
			}).then((result) => {
			  if (result.value) {
			    Swal.fire(
			      'Fired!',
			      'Applicant has been fired.',
			      'success'
			    )
			    $.ajax({
			    	url: 'phpfunction/myfunction.php',
			    	type: 'post',
			    	data:
			    	{
			    		fired_applicant : 1,
			    		id : id,
			    		// subject_id : subject_id
			    		// username : username,
			    		// srn : srn
			    	},success:function(response){
			    		setTimeout(function(){
			    			location.reload();
			    		},1500);
			    	}
			    });
			  }
			})
	});
});