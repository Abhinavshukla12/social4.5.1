<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just log in</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 400px;
      margin-top: 100px;
    }
    .logo-box {
      position: absolute;
      top: 20px;
      left: 20px;
    }
  </style>
</head>
<body>
<div class="logo-box">
    <img src="path/to/your/logo.png" alt="Logo" width="100">
  </div>
  <div class="container">
    <h2 class="text-center mb-4">Login</h2>
        <?php echo form_open('validation/submit', ['class' => 'needs-validation', 'novalidate' => '']); ?>
        <?= csrf_field() ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control <?php echo isset($validation) && $validation->hasError('name') ? 'is-invalid' : ''; ?>" value="<?php echo isset($old['name']) ? $old['name'] : ''; ?>">
                <div class="invalid-feedback"><?php echo isset($validation) ? $validation->getError('name') : ''; ?></div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control <?php echo isset($validation) && $validation->hasError('email') ? 'is-invalid' : ''; ?>" value="<?php echo isset($old['email']) ? $old['email'] : ''; ?>">
                <div class="invalid-feedback"><?php echo isset($validation) ? $validation->getError('email') : ''; ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p>
        </div>
    </div>
    <!-- Bootstrap JavaScript (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
