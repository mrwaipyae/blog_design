<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Blog System</title>
    <!-- Import Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Import custom CSS -->
    <link rel="stylesheet" href="path/to/custom.css" />
  </head>
  <body>
    <!-- Main content -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-3">
          <!-- Sidebar -->
          <ul class="list-group">
            <li class="list-group-item active">Dashboard</li>
            <li class="list-group-item">Posts</li>
            <li class="list-group-item">Categories</li>
            <li class="list-group-item">Tags</li>
            <li class="list-group-item">Users</li>
            <li class="list-group-item">Settings</li>
          </ul>
        </div>
        <?php include 'posts.php'; ?>
      </div>
    </div>