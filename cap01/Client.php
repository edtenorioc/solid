<?php
include('Book.php');
include('StandarOutputPrinter.php');

final class Client
{
    public function getCurretPage()
    {
        $currentPage = (new Book())->getCurrentPage();
        (new StandarOutputPrinter())->printPage($currentPage);
    }
}

(new Client())->getCurretPage();