<?php 
$url = get_option( 'dungrok_server_url' );
?>
<form action="" method="post">
    <h2><?php echo esc_html__( 'Settings', 'debug-using-ngrok' ); ?></h2>
    <div class="wp-privacy-request-form-field">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="ngrok_server_url"><?php echo esc_html__( 'Ngrok server url', 'debug-using-ngrok' ); ?></label>
                    </th>
                    <td>
                        <input type="text" required="" class="regular-text ltr" id="ngrok_server_url" name="ngrok_server_url" value="<?php echo esc_url( $url ); ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button" value="<?php echo esc_html__('Save', 'debug-using-ngrok'); ?>">
        </p>
    </div>
    <input type="hidden" name="action" value="save_debug_ngrok_settings">
    <?php wp_nonce_field( 'dungrok_nonce', 'dungrok_nonce' ); ?>
</form>

<div class="next-steps">
    <h2><?php echo esc_html__( 'Next steps', 'debug-using-ngrok' ); ?></h2>
    <p>
        <?php echo esc_html__( 'Call the', 'debug-using-ngrok' ); ?> <strong><?php echo esc_html( 'dungrok_send( $title, $data );' )?></strong>
        <?php echo esc_html__( 'function wherever you want to debug and then you will receive the debug logs in your ngrok server (localhost:4040)', 'debug-using-ngrok' ); ?><br>
    </p>
</div>