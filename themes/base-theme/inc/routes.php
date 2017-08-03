<?php 

/*

		██████╗  ██████╗ ██╗   ██╗████████╗███████╗███████╗
		██╔══██╗██╔═══██╗██║   ██║╚══██╔══╝██╔════╝██╔════╝
		██████╔╝██║   ██║██║   ██║   ██║   █████╗  ███████╗
		██╔══██╗██║   ██║██║   ██║   ██║   ██╔══╝  ╚════██║
		██║  ██║╚██████╔╝╚██████╔╝   ██║   ███████╗███████║
		╚═╝  ╚═╝ ╚═════╝  ╚═════╝    ╚═╝   ╚══════╝╚══════╝
                                                   
*/
$slim = new \Slim\Slim();

add_action( 'slim_mapping', function( $slim ) {



	$slim->get('/rest/robots/', function() { 
		$data = array(
						"error_code" => NULL,
						"message"	 => "These are not the droids you're looking for."
					);
		return wp_send_json_success( $data );
	});

	$slim->get('/coleccion/tags/:tags+/', function( $tags ) { 
		$request_tags = $tags;
		
		//Remove empty last element
	});

});

