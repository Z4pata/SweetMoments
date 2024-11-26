<?php

namespace App;

enum statuses: string
{
    case Pending = 'pending';
    case InProgress = 'in-progress';
    case Delivered = 'delivered';
    case Canceled = 'canceled';
}
