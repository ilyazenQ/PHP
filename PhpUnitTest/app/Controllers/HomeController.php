<?php
namespace App\Controllers;
use App\App;
use App\Models\Order;
use App\View;
use PDO;

class HomeController {

public function index():string {
    //$x = ['z'=>321];
    $orders = new Order();
    //var_dump($orders->orders());
    //$db1 = App::db();
   // var_dump($db===$db1);
  //  $query = 'SELECT * FROM orders LIMIT 2';
    //$stmt = $db->query($query);
    //var_dump($stmt->fetchAll());

    return View::make('index',
       [
           'orders' => $orders->getAllOrders(),
           //'x'=>$x['z']

       ]

   )->render(true);

}

public function show():string {

    return View::make('show')->render(true);

}

public function search() {

     if(isset($_POST['search_sub'])) {

         $productName = $_POST['s'];
         $orders = new Order();
         $search = $orders->getSearchOrders($productName);
        //var_dump($search === []);
         return View::make('search',
             [
                 'orders' => $search ,
                 //'x'=>$x['z']

             ]
         )->render(true);;
     }

}

}