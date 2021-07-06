<?php
// $name = '';
// $signupUsername = '';
// $number = '';

if (is_post_request()) {
  $subject = [];

  $subject['signup-name'] = $_POST['signup-name'] ?? '';
  $subject['signup-username'] = $_POST['signup-username'] ?? '';
  $subject['signup-email'] = $_POST['signup-email'] ?? '';
  $subject['signup-password'] = $_POST['signup-password'] ?? '';
  $subject['signup-retype-password'] = $_POST['signup-retype-password'] ?? '';


  $result = insert_subject($subject);
  if ($result === true) {
    redirect_to(url_for('../index.php'));
  } else {
    $errors = $result;
  }
} else {
  $subject['signup-name'] = '';
  $subject['signup-username'] = '';
  $subject['signup-email'] = '';
  $subject['signup-password'] = '';
  $subject['signup-retype-password'] = '';
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

    <div class="account-types-cont">
      <div class="account-type-title-cont">
        <h3>Choose Account Type</h3>
      </div>

      <div class="account-type-btns-cont">
        <div class="account-type-free-cont account-type-cont">
          <button class="btn btn-primary account-type-btn" id="signup-account-free-btn">Free</button>
        </div>

        <div class="account-type-personal-cont account-type-cont">
          <button class="btn btn-primary account-type-btn" id="signup-account-personal-btn">Pro-Personal</button>
        </div>

        <div class="account-type-business-cont account-type-cont">
          <button class="btn btn-primary account-type-btn" id="signup-account-business-btn">Pro-Business</button>
        </div>

      </div>
    </div>

    <form action="" method="POST" class="signup-form">

      <div class="personal-info-cont">
        <hr class="signup-hr" />
        <div class="fieldset-cont">
          <p>-Personal Information-</p>
        </div>

        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label signup-label">Full Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control signup-input" id="signup-name" value="<?php echo h($subject['signup-name']); ?>" placeholder="<?php echo $errors['signup-name'] ?? ''; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label for="signup-username" class="col-sm-2 col-form-label signup-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control signup-input" id="signup-username" value="<?php echo h($subject['signup-username']); ?>" placeholder="<?php echo $errors['signup-username'] ?? ''; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label for="signup-email" class="col-sm-2 col-form-label signup-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control signup-input" id="signup-email" value="<?php echo h($subject['signup-email']); ?>" placeholder="<?php echo $errors['signup-email'] ?? ''; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label for="signup-password" class="col-sm-2 col-form-label signup-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control signup-input" id="signup-password">
          </div>
        </div>

        <div class="row mb-3">
          <label for="signup-retype-password" class="col-sm-2 col-form-label signup-label">Retype Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control signup-input" id="signup-retype-password">
          </div>
        </div>
      </div>

      <div class="payment-info-cont">
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
      </div>

      <div class="signup-submit-btns-cont">
        <input type="submit" class="btn btn-primary submit submit-btns" value="Sign Up" name="submit">
        <input type="button" id="cancel" class="btn btn-secondary submit submit-btns" value="Cancel" name="cancel">
      </div>
    </form>
  </div>
</div>