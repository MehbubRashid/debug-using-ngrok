<?php 



/**
 * Send request to the saved ngrok server.
 *
 * @param string $title
 * @param mixed $data
 * @return void
 */
function dungrok_send( $title, $data ) {
    // Change the url according to your ngrok server url
    $url = get_option( 'dungrok_server_url' );

    wp_remote_post( $url, array(
        'method'      => 'POST',
        'timeout'     => 45,
        'sslverify'   => false,
        'headers'     => [
            'Content-Type' => 'application/json',
        ],
        'body'        => json_encode(
            array(
                'title' => $title,
                'data' => $data
            )
        ),
    ));
}










?>