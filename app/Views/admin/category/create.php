<!doctype html>
<html lang="en">

<head>
  <title>create</title>
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
  </header>
  <main>
  <div class="card-body">
        <form action="<?= base_url('categories/add') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-2">
                <label >Name</label>
                <input type="text" name="name" class="form-control" placeholder="write the category name" Required>
            </div>
            <div class="form-group mb-2">
                <label >image</label>
                <input type="file" name="image" class="form-control" placeholder="upload your image" Required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2 " > Save</button>
            </div>
            <div class="form-group">
            <a href="<?=base_url('/categories') ?>" class="btn btn-primary btn-sm mt-2">Back</a>
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