<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to Kookie's Binder</h2>
        <p class="text-muted mb-0">Your one-stop shop for Pokemon Cards</p>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="mb-3">
            <i class="bi bi-info-circle text-primary me-2"></i>
            About Us
        </h5>
        <hr>
        <p>Kookie's Binder is a Pokemon card store specialising in the Pokemon TCG — from Base Set classics to Scarlet &amp; Violet. Browse our catalogue, manage customer orders, and track inventory all in one place.</p>
        <hr>
        <div class="d-flex gap-2 flex-wrap">
            <a href="products.php" class="btn btn-primary"><i class="bi bi-collection-fill me-1"></i>Browse Products</a>
            <a href="orders.php" class="btn btn-outline-primary"><i class="bi bi-cart-fill me-1"></i>View Orders</a>
            <a href="customers.php" class="btn btn-outline-secondary"><i class="bi bi-people-fill me-1"></i>Customers</a>
            <a href="staffs.php" class="btn btn-outline-secondary"><i class="bi bi-person-badge-fill me-1"></i>Staffs</a>
        </div>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>