<?php

/**
 * Custom Post Types
 * cpt: tickets
 */

initialise();

function initialise()
{
    add_action('init', 'create_post_type');
    add_action('init', 'create_custom_taxonomy');
    add_action('admin_init', 'ep_admin_init');
    //  add_action( 'init', 'seedTaxonomies' );
}

function create_post_type()
{
    register_post_type(
        'ticket',
        array(
            'labels'        => array(
                'name' => __(EP_product_label_plural),
                'singular_name' => __(EP_product_label)
            ),
            'public'        => true,
            'has_archive'   => true,
            'menu_position' => 20
        )
    );
}

function create_custom_taxonomy()
{
    register_taxonomy(
        'ticket-type',
        'ticket',
        array(
            'labels'    => array(
                'name'  => 'Ticket Types',
                'add_new_item'  => 'Add New Type',
                'new_item_name' => 'New Type'
            ),
            'show_ui'   => TRUE,
            'show_tagcloud' => FALSE,
            'hierarchical'  => TRUE
        )
    );
}

function ep_admin_init()
{
    add_meta_box('charge_meta', 'Ticket Charge', 'ticketCharge', 'ticket');
}

function ticketCharge()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $ticket_charge = isset($custom['ticket_charge'][0]) ? $custom['ticket_charge'][0] : 0;
?>
    <label for="ticket_charge">Ticket Charge: &dollar;</label>
    <input type="text" name="ticket_charge" value="<?php echo $ticket_charge; ?>" />

<?php
}

function save_ticket_charge()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $ticket_charge  = (int) $_POST['ticket_charge'];
    update_post_meta($post->ID, 'ticket_charge', $ticket_charge);
}
