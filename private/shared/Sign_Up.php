<?php
$name = '';
$number = '';

if (is_post_request()) {
  $subject = [];

  $subject['name'] = $_POST['name'] ?? '';
  $subject['username'] = $_POST['username'] ?? '';

  $result = insert_subject($subject);
  if ($result === true) {
    redirect_to(url_for('./index.php'));
  } else {
    $errors = $result;
  }
} else {
  $subject['name'] = '';
  $subject['username'] = '';
}

// if(isset($cancel)) {
//   redirect_to(url_for("/index.php"));
// }

?>

<div class="signup-page-cont">
  <div class="page-heading-cont">
    <h2>Sign Up</h2>
  </div>
  <div class="signup-form-cont">
    

    <form action="" method="POST" class="signup-form">

      <hr class="signup-hr" />
      <div class="fieldset-cont">
        <p>-Personal Information-</p>
      </div>

      <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label signup-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control signup-input" id="name" value="<?php echo h($subject['name']); ?>" placeholder="<?php echo $errors['name'] ?? ''; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label signup-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control signup-input" id="username" value="<?php echo h($subject['username']); ?>" placeholder="<?php echo $errors['username'] ?? ''; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label signup-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control signup-input" id="inputEmail3">
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label signup-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control signup-input" id="inputPassword3">
        </div>
      </div>

      <div class="row mb-3">
        <label for="retype-password" class="col-sm-2 col-form-label signup-label">Retype Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control signup-input" id="retype-password">
        </div>
      </div>

      <hr class="signup-hr" />
      <div class="fieldset-cont">
        <p>-Payment Information-</p>
      </div>

      <div class="row mb-3">
        <label for="card-name" class="col-sm-2 col-form-label signup-label">Cardholder Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control signup-input" id="card-name">
        </div>
      </div>

      <div class="row mb-3">
        <label for="address" class="col-sm-2 col-form-label signup-label">Billing Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control signup-input" id="address">
        </div>
      </div>

      <div class="row mb-3">
        <label for="card-number" class="col-sm-2 col-form-label signup-label">Card Number</label>
        <div class="col-sm-10">
          <input type="number" class="form-control signup-input" id="card-number">
        </div>
      </div>

      <div class="card-numbers-cont">

        <div class="row mb-3">
          <label for="exp-date" class="col-sm-2 col-form-label signup-label">Exp</label>
          <div class="col-sm-10">
            <input type="text" class="form-control signup-input" id="exp-date" length="9">
          </div>
        </div>

        <div class="row mb-3">
          <label for="card-cvv" class="col-sm-2 col-form-label signup-label">CVV</label>
          <div class="col-sm-10">
            <input type="text" class="form-control signup-input" id="card-cvv" length="3">
          </div>
        </div>
      </div>

      <div class="signup-submit-btns-cont">
        <input type="submit" class="btn btn-primary submit submit-btns" value="Sign Up" name="submit">
        <input type="button" id="cancel" class="btn btn-primary submit submit-btns" value="Cancel" name="cancel">
      </div>
    </form>


  </div>
</div>