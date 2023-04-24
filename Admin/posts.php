<div class="col-md-9">
  <!-- Post navigation -->
  <div class="row mb-3">
    <div class="col-md-6">
      <a href="#" class="btn btn-success btn-block">Add New Post</a>
    </div>
    <div class="col-md-6">
      <form class="form-inline float-right">
        <div class="form-group">
          <label for="search" class="mr-2">Search</label>
          <input
            type="text"
            class="form-control mr-2"
            id="search"
            placeholder="Enter keyword"
          />
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Post table -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Category</th>
        <th scope="col">Tags</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>First Post</td>
        <td>John Doe</td>
        <td>Tech</td>
        <td>Web Development, Laravel</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Second Post</td>
        <td>Jane Doe</td>
        <td>Health</td>
        <td>Fitness, Nutrition</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
