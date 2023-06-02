<?php
class Users extends Controller
{
  public function __construct()
  {
  }

  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form

      //sanitaze host data

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // Init data
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      //validate Email

      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      // validate name

      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      //vvalidate password

      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['password'] < 6)) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }
      //validate confirm password

      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password';
      } else {
        if ($data['password'] !== $data['confirm_password']) {
          $data['confirm_password_err'] = 'Passwords do not match';
        }
      }


      //MAke sure errors are empty

      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        die('Succcess');
      } else {
        //load view with errors
        $this->view('users/register', $data);
      }
    } else {
      // Init data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }

  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form

      // Sanitize input data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Initialize data
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      // Validate password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      // Check if there are any errors
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Success: Perform login action or redirect to the desired page
        die('Success');
      } else {
        // Errors: Load view with errors
        $this->view('users/login', $data);
      }
    } else {
      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load view
      $this->view('users/login', $data);
    }
  }
}
