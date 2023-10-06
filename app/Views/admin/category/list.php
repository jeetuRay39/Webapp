<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-underline-opacity-0 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Welcome Admin</strong> 
          </a>
          
          <ul class="dropdown-menu" >
            
            <li><a class="dropdown-item" href="#">Logout</a></li>
           
          </ul>
        
    </div>
  </div>
</nav>
  </header>
  <main>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">SN.</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    ?>
    <?php if($category): ?>
        <?php foreach($category as $row):?>

    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['name'] ?></td>
        <td>
        <a href="<?=base_url('categories/edit/'.$row['id'])?>" class="btn btn-primary btn-sm">Edit</a>
        <a href="<?=base_url('categories/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
  </tbody>
  <?php
  $no++;
  ?>
  <?php endforeach;?>
  <?php endif;?>
</table>
<a href="<?=base_url('/categories/create') ?>" class="btn btn-info btn-sm">Create</a>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>