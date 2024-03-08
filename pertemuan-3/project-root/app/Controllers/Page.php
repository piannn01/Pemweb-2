<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }

    public function tos()
    {
        echo "Halaman Term of Service";
    }

    public function biodata()
    {
        echo "Nama          : Achmad Eka Oktavianto";
        echo "<br>Nim       : 4122007";
        echo "<br>Alamat    : Kedawong, Diwek";
        echo "<br>Hobi      : nongkrong";
        echo "<br>Email     : achmadekaoktavianto@saintek.unipdu.ac.id";
    }
}