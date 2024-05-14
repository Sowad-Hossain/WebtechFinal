<?php
require ('../model/order-model.php');
require ('../model/book-model.php');
require ('../model/user-model.php');
require ('../controller/fpdf.php');
session_start();

$all_orders = get_all_orders();
$counts = get_book_counts();
$users = get_user_counts();
$total_money = get_total_money_by_status();
$orders_count = get_order_counts();

if (isset($_POST['print_pdf'])) {

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(0, 10, 'Report', 0, 1,'center');
    $pdf->Cell(0, 10, 'Number of Books Available: ' . $counts['total_books'], 0, 1);
    $pdf->Cell(0, 10, 'Number of Books in Stock: ' . $counts['total_stock'], 0, 1);
    $pdf->Cell(0, 10, 'Number of Books Sold: ' . $counts['total_sold'], 0, 1);
    $pdf->Cell(0, 10, 'Number of Customers: ' . $users['total_customers'], 0, 1);
    $pdf->Cell(0, 10, 'Number of Employees: ' . $users['total_employees'], 0, 1);
    $pdf->Cell(0, 10, 'Number of Managers: ' . $users['total_managers'], 0, 1);
    $pdf->Cell(0, 10, 'Total Orders: ' . $orders_count['total_count'], 0, 1);
    $pdf->Cell(0, 10, 'Orders Pending: ' . $orders_count['pending_count'], 0, 1);
    $pdf->Cell(0, 10, 'Completed Orders: ' . $orders_count['completed_count'], 0, 1);
    $pdf->Cell(0, 10, 'Cancelled Orders: ' . $orders_count['cancelled_count'], 0, 1);
    $pdf->Cell(0, 10, 'Total Revenue: TK. ' . $total_money['completed_money'], 0, 1);
    $pdf->Cell(0, 10, 'Pending: TK. ' . $total_money['pending_money'], 0, 1);
    $pdf->Cell(0, 10, 'Employee Salary: TK. ' . $total_money['completed_money'], 0, 1);
    $pdf->Cell(0, 10, 'Profit: TK. ' . $total_money['pending_money'], 0, 1);

    $pdf->Output('report.pdf', 'D'); // 'D' means force download
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Report</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php require_once ('navbar.php') ?>
    <?php require_once ('side-panel.php') ?>

    <div class="container">
        <h1 align="center">Print Report</h1>
        <div>
            <p><strong>Number of Books Available:</strong> <?= $counts['total_books'] ?></p>
            <p><strong>Number of Books in Stock:</strong> <?= $counts['total_stock'] ?></p>
            <p><strong>Number of Books Sold:</strong> <?= $counts['total_sold'] ?></p>
            <p><strong>Number of Customers:</strong> <?= $users['total_customers'] ?></p>
            <p><strong>Number of Employees:</strong> <?= $users['total_employees'] ?></p>
            <p><strong>Number of Managers:</strong> <?= $users['total_managers'] ?></p>
            <p><strong>Total Orders:</strong> <?= $orders_count['total_count'] ?></p>
            <p><strong>Orders Pending:</strong> <?= $orders_count['pending_count'] ?></p>
            <p><strong>Completed Orders:</strong> <?= $orders_count['completed_count'] ?></p>
            <p><strong>Cancelled Orders:</strong> <?= $orders_count['cancelled_count'] ?></p>
            <p><strong>Total Revenue:</strong> TK. <?= $total_money['completed_money'] ?></p>
            <p><strong>Pending:</strong> TK. <?= $total_money['pending_money'] ?></p>
            <p><strong>Employee Salary:</strong> TK. <?= $total_money['completed_money'] ?></p>
            <p><strong>Profit:</strong> TK. <?= $total_money['pending_money'] ?></p>

        </div>

        <form method="post">
            <button type="submit" name="print_pdf">Print Report</button>
        </form>

    </div>
    <?php require_once ('footer.php') ?>
</body>

</html>