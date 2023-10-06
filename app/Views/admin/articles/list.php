<!doctype html>
<html lang="en">

<head>
  <title>list articles</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">author</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                ?>
                <?php if($article):?>
                    <?php foreach($article as $row ): ?>   
                <tr class="">
                   <td><?=$no ?></td>
                   <td><?=$row['title'] ?></td>
                   <td><?=$row['description'] ?></td>
                   <td><?=$row['author'] ?></td>
                   <td> 
                   <a href="<?=base_url('articles/edit/'.$row['id'])?>" class="btn btn-primary btn-sm">Edit</a>
                   <a href="<?=base_url('articles/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                   </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
                <?php endif;?>
                
            </tbody>
        </table>
        <a href="<?=base_url('/articles/create') ?>" class="btn btn-info btn-sm">Create</a> 
    </div>
    


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