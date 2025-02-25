<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Newsletter Subscription',
    'email_message' => 'You have a new newsletter subscription',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'powerchangeslives.com',
    'to' => 'info@powerchangeslives.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>