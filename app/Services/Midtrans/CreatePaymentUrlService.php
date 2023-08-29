<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class CreatePaymentUrlService extends Midtrans
{
    protected $order;

    public function __construct()
    {
        parent::__construct();
    }

    public function getPaymentUrl($order)
    {

        $items_details = new Collection();

        foreach($order->orderItems as $item)
        {
            $product = Product::find($item->product_id);
            $items_details->push([
                'id' => $product->id,
                'price' => $product->price,
                'quantity' => $item->quantity,
                'name' => $product->name
            ]);
        }
        
        $params = [
            'transaction_details' => [
                'order_id' => $order->number,
                'gross_amount' => $order->total_price,
            ],
            'item_details' => $items_details,
            'customer_details' => [
                'first_name' => $order->user->name,
                'email' => $order->user->email,
            ]
        ];

        $paymentUrl = Snap::createTransaction($params)->redirect_url;

        return $paymentUrl;
    }
}