<?php

namespace App\Http\Controllers;

use Automattic\WooCommerce\Client;
use Exception;

class WooCommerceController extends Controller
{
    public function listarProductos()
    {
        try {
            $woocommerce = new Client(
                env('WOOCOMMERCE_STORE_URL'),
                env('WOOCOMMERCE_CONSUMER_KEY'),
                env('WOOCOMMERCE_CONSUMER_SECRET'),
                [
                    'wp_api' => true,
                    'version' => 'wc/v3',
                ]
            );
    
            $productos = $woocommerce->get('products');
    
            return view('productos', compact('productos'));
        } catch (Exception $e) {
            // Manejar cualquier error de conexión
            echo "Error de conexión: " . $e->getMessage();
        }
    }
    
}
