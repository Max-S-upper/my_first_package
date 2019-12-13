<?php

class MyFirstPackage extends \Monolog\Logger
{
    public function customGetProcessor() {
        $processors = '';
        implode($processors, $this->getProcessors());
        if (!$processors) return "You haven't got any processors yet";
        else return 'Here are your processor(s): ' . $processors;
    }
}