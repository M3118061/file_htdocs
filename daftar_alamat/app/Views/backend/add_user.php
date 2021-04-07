<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="first_name" class="form-control">
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control">
      </div>

      <div class="form-group">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          first_name: {
            required: true,
          },
          no_hp: {
            required: true,
          },
        },
        messages: {
          first_name : {
            required: "First Name is required.",
          },
          no_hp : {
            required: "No HP is required.",
          },
        },
      })
    }
  </script>
</body>

</html>