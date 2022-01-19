<?php
include ('Printer.php');

final class StandarOutputHtmlPrinter implements Printer
{
    public function printPage(string $page)
    {
        echo "<b>".$page."</b>";
    }
}