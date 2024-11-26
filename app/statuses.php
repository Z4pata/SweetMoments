<?php

namespace App;

enum statuses: string
{
    case Pending = 'P';
    case InProgress = 'IP';
    case Delivered = 'D';
    case Canceled = 'C';
}
