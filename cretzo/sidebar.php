<style>
    .bg{
        background-color: #f38331;
        color: white !important;
    }
</style>

<div class="col-lg-2 d-flex flex-column flex-shrink-0 D-none">
    <div class="border px-1 py-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="dashboard.php" class="nav-link side-menu">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="order.php" class="nav-link side-menu">
                <i class="bi bi-cart"></i>
                order
            </a>
        </li>
        <li>
            <a href="mybooking.php" class="nav-link side-menu">
                <i class="bi bi-cart"></i>
                My Booking 
            </a>
        </li>
        <li>
            <a href="payment.php" class="nav-link side-menu">
                <i class="bi bi-wallet"></i>
                Payment Method
            </a>
        </li>
        <li>
            <a href="saveaddress.php" class="nav-link side-menu">
                <i class="bi bi-geo-alt"></i>
                Address
            </a>
        </li>
        <li>
            <a href="account.php" class="nav-link side-menu">
                <i class="bi bi-person"></i>
                Account Details
            </a>
        </li>
        <li>
        <li>
            <a href="login.php" class="nav-link side-menu">
                <i class="bi bi-person"></i>
                Login
            </a>
        </li>

        <li>
            <a href="signup.php" class="nav-link side-menu">
                <i class="bi bi-person"></i>
                Signup
            </a>
        </li>        <!-- <button class="nav-link side-menu text-dark">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button> -->
        </li>
    </ul>
    </div>
</div>

<script>
let active = document.querySelectorAll('.side-menu');
const activePage = window.location.pathname;
for (key of active) {
  if (key.href.includes(`${activePage}`)) {
    key.classList.add('bg');
  }
  if (window.location.pathname === "/") {
    key.classList.remove('');
 }
}
</script>