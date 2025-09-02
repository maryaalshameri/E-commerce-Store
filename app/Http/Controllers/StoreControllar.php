<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreControllar extends Controller
{
    private $products = [
        [
        'id' => 0,
        'name' => 'Knitted Jumper',
        'price' => 24.99,
        'on_sale' => true,
        'description' => 'A light organic face cream for daily use.',
        'image' => 'assets/img/gallery/arrival2.png'
        ],
        [
        'id' => 1,
        'name' => 'Natural Lipstick',
        'price' => 12.50,
        'on_sale' => false,
        'description' => 'Long-lasting natural lipstick.',
        'image' => 'assets/img/gallery/arrival3.png'
        ],
        [
        'id' => 2,
        'name' => 'Herbal Shampoo',
        'price' => 15.00,
        'on_sale' => true,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival4.png'
        ],
        [
        'id' => 3,
        'name' => 'Herbal Shampoo',
        'price' => 25.20,
        'on_sale' => true,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival5.png'
        ],
        
        [
        'id' => 4,
        'name' => 'Herbal Shampoo',
        'price' => 30.90,
        'on_sale' => true,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival6.png'
        ],
        
        [
        'id' => 5,
        'name' => 'Herbal Shampoo',
        'price' => 10.10,
        'on_sale' => false,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival7.png'
        ],
       
        [
        'id' => 6,
        'name' => 'Herbal Shampoo',
        'price' => 20.09,
        'on_sale' => true,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival8.png'
        ],
        [
        'id' => 7,
        'name' => 'Herbal Shampoo',
        'price' => 38.10,
        'on_sale' => false,
        'description' => 'Shampoo with herbal extracts.',
        'image' => 'assets/img/gallery/arrival1.png'
        ],
        
 
        ];


        public function products()
        {
        $products = $this->products;
        return view('shop.products', compact('products'));
        }


        public function productDetails($id)
        {
        $product = $this->products[$id] ?? $this->products[0];
        return view('shop.products-details', compact('product'));
        }


        public function cart()
        {
        return view('shop.cart');
        }


        public function about()
        {
        $title = 'Our Story';
        $description = '
        Welcome to Sheion House, your trusted online clothing store where fashion meets quality and affordability.
        Our journey started with a simple vision: to make stylish, modern, and comfortable clothing accessible to everyone.'         ;
        $rawHtml = '<p><strong>Our mission</strong> Our Mission

 is to provide an effortless online shopping experience, offering a wide range of clothing collections that combine:

High-quality fabrics and timeless designs

Constant innovation to follow the latest trends

Outstanding customer care to ensure your satisfaction</p>';
        return view('shop.about-us', compact('title', 'description', 'rawHtml'));
        }


        public function contact()
        {
        return view('shop.contact');
        }
}
