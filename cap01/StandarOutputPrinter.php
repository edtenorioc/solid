<?php
include ('Printer.php');

final class StandarOutputPrinter implements Printer
{
    public function printPage(string $page)
    {
        echo $page;
    }
}