<?php
 
include ('includes/base.php');
$c = isset($_GET['c']) ? $_GET['c'] : '';
switch ($c)
{
    case 'get_vouchers':
        $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
        $query = $pdo->prepare("SELECT * FROM voucher WHERE op_id = ? AND vo_status = '1' ORDER BY vo_harga ASC");
        $query->execute(array($operator));
        if ($query->rowCount() == 0)
        {
            return;
        }
        $vouchers = $query->fetchAll();
        foreach ($vouchers as $voucher)
        {
            echo '<option value="' . $voucher->vo_kode . '">' . __e($voucher->
                vo_nominal) . ' (Rp. ' . format_uang($voucher->vo_harga) . ')</option>';
        }
        $pdo = null;
        break;
    default:
        break;
}
