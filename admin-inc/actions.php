<?php

defined('ADM_INC') or die('Akses Terlarang!');

switch ($a)
{
    case 'set_produk_status':
        $pr = isset($_GET['produk']) ? $_GET['produk'] : '';
        $status = isset($_GET['status']) ? $_GET['status'] : '';
        if (array_key_exists($pr, $produk) && in_array($status, array('on', 'off')))
        {
            $produk->{$pr}->status = $status;
            $q = $pdo->prepare("UPDATE setelan SET set_val = ? WHERE set_key = ?");
            $q->execute(array(json_encode($produk), 'produk'));
        }
        header("Location: admin.php?c=index#produk");
        exit();
        break;

    default:
        header("Location: admin.php?c=index#produk");
        exit();
        break;
}
