<?php

namespace Modules\Sales\Interfaces;

use Modules\Sales\Interfaces\SaleOutputInterface;

class HtmlOutput implements SaleOutputInterface
{
    public function output($sales)
    {
        // تنفيذ الأسلوب هنا
        return "<h1>Your Sales is: ".$sales."</h1>";
    }
}
