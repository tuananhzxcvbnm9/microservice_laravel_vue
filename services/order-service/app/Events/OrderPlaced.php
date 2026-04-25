<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public string $orderId,
        public string $userId,
        public array $payload
    ) {
    }
}
