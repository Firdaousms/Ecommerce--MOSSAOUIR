<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/projet3',
    'ck_c15e85c974e8e39bd8926a3b38cfd8917ec27d94',
    'cs_793a17a45d48f33a545a174090a2b19be4c4263f',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>

<?php echo json_encode($woocommerce->get('orders')); ?>