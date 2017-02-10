<?php

namespace App\Events\FacebookScammer;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Created extends FacebookScammerBase implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
