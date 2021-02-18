jQuery(function($){ 
	$('.more-btn').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': jb_decagon_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : jb_decagon_loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : jb_decagon_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); 
			},
			success : function( data ){
				if( data ) { 
                    button.text('See More');
                    $(".post").last().after(data); 
					jb_decagon_loadmore_params.current_page++;
 
					if ( jb_decagon_loadmore_params.current_page == jb_decagon_loadmore_params.max_page ) 
						button.remove(); 
					
					 //$( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});