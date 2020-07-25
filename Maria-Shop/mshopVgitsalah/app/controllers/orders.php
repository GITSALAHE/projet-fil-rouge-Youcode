<?php 

$crud = new CRUD();
$order = new Order();
$cardOfProductCart = $crud->selectAll('cart', ['idU' => $_SESSION['idU']]);


if(isset($_POST['checkout'])){
      $orderId =  $order->getOrderId('orders', ['idU' => $_SESSION['idU']], 'idOrder');
      $orderNumber = $orderId['idOrder'];
      $orderIdF = $orderId['idOrder'];
      foreach($cardOfProductCart as $cart):
        $_POST['orderNumber'] =  '#Mshop' . $orderIdF;
        $_POST['idP'] = $cart['idP'];
        $_POST['qte'] = $cart['qte'];
        $_POST['idU'] = $cart['idU'];
        unset($_POST['checkout'],  $_POST['payment'], $_POST['email']);
        
        $crud->create('orders', $_POST);
        $idCartTodelete = $cart['idCart'];
       
        $crud->delete('cart', 'idCart', $idCartTodelete);
      endforeach;
      
      header("location:thankyou.php?idOrder=Mshop$orderNumber");
      exit();
}

