jQuery(document).ready(function(){

	//add remove button to the page
	jQuery("#nav-menu-header .publishing-action").prepend('<span class="remove-invalid-items" style="margin-right: 20px;"><a class="button button-delete button-large" href="#" style="color: #dc3232;">Delete Invalid Menu Items</a></span>');

	//
	jQuery('span.remove-invalid-items a.button-delete').on('click', function(e){

		//Prevent default action
		e.preventDefault();

		if(jQuery('.menu-item-invalid')[0]){
			jQuery('.menu-item-invalid a.item-delete').click();
		}else{
			alert('Sorry, no invalid menu items found.');
		}

	});
});
