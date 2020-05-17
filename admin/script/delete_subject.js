$(document).ready(function(){
	$('.delete_subject').click(function(){
		var id = $(this).val();
		// alert(id);
		Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			    Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )
			    $.ajax({
			    	url: 'phpfunction/myfunction.php',
			    	type: 'post',
			    	data:
			    	{
			    		delete_subject : 1,
			    		id : id
			    	},success:function(response){
			    		setTimeout(function(){
			    			location.reload();
			    		},1500);
			    	}
			    });
			  }
			})
	})
});