<?php

namespace App\Actions;

use App\Events\OrderPlaced;

class CreateOrderAction
{
    public function execute(array $payload, string $userId): array
    {
        $order = [
            'id' => (string) str()->uuid(),
            'user_id' => $userId,
            'status' => 'pending_payment',
            'currency' => $payload['currency'],
            'items' => $payload['items'],
        ];

        OrderPlaced::dispatch($order['id'], $userId, $payload);

        return $order;
    }
}
