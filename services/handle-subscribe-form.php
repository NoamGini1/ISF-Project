<?php
// For both logged-in and logged-out users
add_action('admin_post_nopriv_handle_subscribe_form', 'handle_subscribe_form_function');
add_action('admin_post_handle_subscribe_form', 'handle_subscribe_form_function');

function handle_subscribe_form_function()
{

    $email = sanitize_email($_POST['email'] ?? '');


    if (!empty($email)) {

        wp_mail('you@example.com', 'New Subscription', 'Email: ' . $email);
    }

    wp_redirect(wp_get_referer() . '?success=true');
    exit;
}
?>