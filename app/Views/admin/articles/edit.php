<!doctype html>
 <html lang="en">
 
 <head>
   <title>create articles</title>
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
   <div class="card-body">
        <form action="<?= base_url('/articles/update/'.$article['id']) ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-2">
        <label >Select the category</label>
        
        <select class="form-select" name="category_id" aria-label="Select the category" id="category_id" required >
            <option   >select one category</option>
            <?php foreach($category as $row): ?>
        
            <option value="<?=$row['id']; ?>" ><?=$row['name'];   ?></option>  
            <?php endforeach; ?>
        
        </select>
        
        
        </div>
        <div class="form-group mb-2">
                <label >Title</label>
                <input type="text" name="title" value="<?=$article['title'] ?>" class="form-control" placeholder="write the title of articles" Required>
            </div>
            <div class="form-group mb-2">
                <label >Description</label>
                <input type="text" name="description" value="<?=$article['description'] ?>" class="form-control" placeholder="write the description of articles" Required>
            </div>
            <div class="form-group mb-2">
                <label >image</label>
                <input type="file" name="image" class="form-control" placeholder="upload your image" >
            </div>
            <div class="form-group mb-2">
                <img width="300" src="<?=base_url('/uploads/articles/'.$article['image']) ?>" alt="">
            </div>
            <div class="form-group mb-2">
                <label >Author</label>
                <input type="text" name="author" value="<?=$article['author'] ?>" class="form-control" placeholder="write the name of the author" Required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2 " > Save</button>
            </div>
            <div class="form-group">
            <a href="<?=base_url('/articles') ?>" class="btn btn-primary btn-sm mt-2">Back</a>
            </div>

        </form>
        
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