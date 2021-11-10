  <!-- navbar -->
  <!-- <style>
    .navbar {

 }
 .navbar li a {
color: #3E6E10;
}
/* .btn{
  color: #63bda1 
} */
 </style> -->
  <nav class="navbar navbar-default" style="background-color:  #CBDABD;">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <!-- Jika sudah login (ada login pelanggan) -->
        <?php if(isset($_SESSION["pelanggan"])): ?>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="riwayat.php">Riwayat Belanja</a></li>
        <!-- Selain itu (belum login / belum ada session pelanggan) -->
        <?php else: ?>
          <li><a href="login.php" font-color="#3E6E10">Login</a></li>
          <li><a href="daftar.php">Daftar</a></li>
        <?php endif; ?>

        <li><a href="checkout.php">Checkout</a></li>
        <li><a href="admin/login.php">link</a></li>

      </ul>

      <form action="pencarian.php" method="get" class="navbar-form navbar-right">
        <input type="text" class="form-control" name="keyword">
        <button class="btn btn-success">Cari</button>
      </form>
    </div>
  </nav>