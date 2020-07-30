<?php 

$crud = new CRUD();
$order = new Order();
$cardOfProductCart = $crud->selectAll('cart', ['idU' => $_SESSION['idU']]);


if(isset($_POST['checkout'])){
      $orderId =  $order->getOrderId('orders', ['idU' => $_SESSION['idU']], 'idOrder');
      $orderNumber = $orderId['idOrder'];
      $orderIdF = $orderId['idOrder'];
     
      foreach($cardOfProductCart as $cart):
        $_POST['orderNumber'] =  'Mshop' . $orderIdF;
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



//showing orders in backoffice 
$allOrderBackOffice = $order->getDiffNumOrder('orders', 'orderNumber');
$allOrderOnequantity = $order->getOneProductQte('orders', 'orderNumber');
$zipCode = '';
if(isset($_GET['orderNum'])){
  $orderDetail = $crud->selectAll('orders', ['orderNumber' => $_GET['orderNum']]);
  $zipCode = $orderDetail[0]['zip'];
}
// send the order to costumer 
if(isset($_GET['change_status'])){
   $checkTheOrder =  $crud->selectAll('orders', ['orderNumber' => $_GET['change_status']]);
   $newStatus = '';
   $changeStatus = $checkTheOrder[0]['status'];
   foreach($checkTheOrder as $orderStatus):
   
   
   if($changeStatus === "pending"){
      $newStatus = "shipped";
   }
  
   $orderStatus['status'] = $newStatus;
   $crud->update('orders', $orderStatus['idOrder'], $orderStatus, 'idOrder');
   endforeach;
   header('location:index.php');
   exit();
}

// info to costumer the order is shipped 

if(isset($_GET['delivred'])){
  $checkDelivred = $crud->selectAll('orders', ['orderNumber' => $_GET['delivred']]);
  $Delivred = '';
  $actualStatus = $checkDelivred[0]['status'];
  foreach($checkDelivred as $deliv):
    if($actualStatus === "shipped"){
      $Delivred = "Delivred";
    }
    $deliv['status'] = $Delivred;
    $crud->update('orders', $deliv['idOrder'], $deliv, 'idOrder');
  endforeach;
    header('location:index.php');
    exit();
 
}