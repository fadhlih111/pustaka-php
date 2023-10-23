<?php $module = !empty($_GET['module']) ? $_GET['module'] : '' ?>

<?php if ($module == '' or $module == 'home') : ?>
  <div class="card">
    <div class="card-header">
      <h1>Selamat Datang Di Website Perpustakaan </h1>
      <h1>SD TSUNAMI</h1>
    </div>  
    <div class="card-body">
      <p>PERPUSTAKAAN SD TSUNAMI</p>
      <p>LOL</p>
    </div>
</div>

<!-- siswa -->
<?php elseif ($module == 'siswa') :
  include "module/siswa/siswa-view.php";

  // module edit siswa

elseif ($module == 'edit-siswa') :

include "module/siswa/siswa-update.php";

  // module user view

  elseif ($module == 'user') :

    include "module/user/user-view.php";

  //
   elseif ($module == 'buku') :

   include "module/buku/buku-view.php";

   elseif ($module == 'edit-buku') :

    include "module/buku/buku-update.php";

   elseif($module == 'pinjam') :
    
    include  "module/pinjam/pinjam-view.php";
    


endif;
?>