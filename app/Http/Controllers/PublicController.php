<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Gioconda Fake',
            'category' => 'Arte',
            'description' => "Identica all'originale",
            // 'url' => '/media/homepage.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Mouse',
            'category' => 'Elettronica',
            'description' => 'Wireless con batterie molto durevoli',
            // 'url' => '/media/prodotto1.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Divano',
            'category' => 'Arredamento',
            'description' => 'Comodissimo e diventa un divano-letto',
            // 'url' => '/media/prodotto2.jpg'
        ],

    ];

 public function home() {
        return view('welcome');
    }
    public  function prodotti() {
        return view('prodotti', ['products' => $this->products]);
    }
    public function prodotti_dettaglio($id){
        
        foreach ($this->products as $product) {
            if($product['id'] == $id){
                return view('detail', ['product' => $product]);
                
            }
        }
    }

   
}

