<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Content = 'content';
    case User = 'user';
}
