<div class="col-auto col-md-2 px-sm-2" style="margin: 0; background-color: #D3D3D3;">
    <div class="px-3 pt-2" style="height: 90vh;">
        <p class="d-flex align-items-center py-3 text-decoration-none" style="color:black;">
            <span class="fs-5 d-none d-sm-inline">
                Welcome, 
                <?php if (isset($_SESSION['user_id'])) { echo $_SESSION['fname']; } else { echo "Admin"; }?>
            </span>
        </p>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu">
            <li class="nav-item">
                <a href="admin-dashboard.php" class="nav-link px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: black;">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="admin-2.php" class="nav-link px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: black;">Admin Page 2</span>
                </a>
            </li>
            <li>
                <a href="admin-view-users.php" class="nav-link px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: black;">View Users</span>
                </a>
            </li>
        </ul>
    </div>
</div>