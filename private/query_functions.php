<?php

  // Subjects

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_subject_by_id($id) {
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
  }

  function validate_subject($subject) {
    $errors = [];

    if(is_blank($subject['signup-name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($subject['signup-name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

    // Make sure we are working with an integer
    if(is_blank($subject['signup-username'])) {
      $errors[] = "Number cannot be blank.";
    } elseif(!has_length($subject['signup-username'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

    return $errors;
  }

  function insert_subject($subject) {
    global $db;

    $errors = validate_subject($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "INSERT INTO subjects ";
    $sql .= "(signup-name, signup-username, signup-email, signup-password, signup-retype-password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $subject['signup-name'] . "',";
    $sql .= "'" . $subject['signup-username'] . "',";
    $sql .= "'" . $subject['signup-email'] . "',";
    $sql .= "'" . $subject['signup-password'] . "',";
    $sql .= "'" . $subject['signup-retype-password'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_subject($subject) {
    global $db;

    $errors = validate_subject($subject);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE subjects SET ";
    $sql .= "signup-name='" . $subject['signup-name'] . "', ";
    $sql .= "signup-username='" . $subject['signup-username'] . "', ";
    $sql .= "signup-email='" . $subject['signup-email'] . "', ";
    $sql .= "signup-password='" . $subject['signup-password'] . "', ";
    $sql .= "signup-retype-password='" . $subject['signup-retype-password'] . "' ";
    $sql .= "WHERE id='" . $subject['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

  function delete_subject($id) {
    global $db;

    $sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  // Pages

  // function find_all_pages() {
  //   global $db;

  //   $sql = "SELECT * FROM pages ";
  //   $sql .= "ORDER BY subject_id ASC, position ASC";
  //   $result = mysqli_query($db, $sql);
  //   confirm_result_set($result);
  //   return $result;
  // }

  // function find_page_by_id($id) {
  //   global $db;

  //   $sql = "SELECT * FROM pages ";
  //   $sql .= "WHERE id='" . $id . "'";
  //   $result = mysqli_query($db, $sql);
  //   confirm_result_set($result);
  //   $page = mysqli_fetch_assoc($result);
  //   mysqli_free_result($result);
  //   return $page; // returns an assoc. array
  // }

  // function validate_page($page) {
  //   $errors = [];

  //   // subject_id
  //   if(is_blank($page['subject_id'])) {
  //     $errors[] = "Subject cannot be blank.";
  //   }

  //   // menu_name
  //   if(is_blank($page['menu_name'])) {
  //     $errors[] = "Name cannot be blank.";
  //   } elseif(!has_length($page['menu_name'], ['min' => 2, 'max' => 255])) {
  //     $errors[] = "Name must be between 2 and 255 characters.";
  //   }

    // position
    // Make sure we are working with an integer
    // $postion_int = (int) $page['position'];
    // if($postion_int <= 0) {
    //   $errors[] = "Position must be greater than zero.";
    // }
    // if($postion_int > 999) {
    //   $errors[] = "Position must be less than 999.";
    // }

    // visible
    // Make sure we are working with a string
    // $visible_str = (string) $page['visible'];
    // if(!has_inclusion_of($visible_str, ["0","1"])) {
    //   $errors[] = "Visible must be true or false.";
    // }

    // content
    // if(is_blank($page['content'])) {
    //   $errors[] = "Content cannot be blank.";
    // }

  //   return $errors;
  // }

  // function insert_page($page) {
  //   global $db;

  //   $errors = validate_page($page);
  //   if(!empty($errors)) {
  //     return $errors;
  //   }

  //   $sql = "INSERT INTO pages ";
  //   $sql .= "(subject_id, menu_name, position, visible, content) ";
  //   $sql .= "VALUES (";
  //   $sql .= "'" . $page['subject_id'] . "',";
  //   $sql .= "'" . $page['menu_name'] . "',";
  //   $sql .= "'" . $page['position'] . "',";
  //   $sql .= "'" . $page['visible'] . "',";
  //   $sql .= "'" . $page['content'] . "'";
  //   $sql .= ")";
  //   $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    // if($result) {
    //   return true;
    // } else {
      // INSERT failed
  //     echo mysqli_error($db);
  //     db_disconnect($db);
  //     exit;
  //   }
  // }

  // function update_page($page) {
  //   global $db;

  //   $errors = validate_page($page);
  //   if(!empty($errors)) {
  //     return $errors;
  //   }

  //   $sql = "UPDATE pages SET ";
  //   $sql .= "subject_id='" . $page['subject_id'] . "', ";
  //   $sql .= "menu_name='" . $page['menu_name'] . "', ";
  //   $sql .= "position='" . $page['position'] . "', ";
  //   $sql .= "visible='" . $page['visible'] . "', ";
  //   $sql .= "content='" . $page['content'] . "' ";
  //   $sql .= "WHERE id='" . $page['id'] . "' ";
  //   $sql .= "LIMIT 1";

  //   $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
  //   if($result) {
  //     return true;
  //   } else {
  //     // UPDATE failed
  //     echo mysqli_error($db);
  //     db_disconnect($db);
  //     exit;
  //   }

  // }

  // function delete_page($id) {
  //   global $db;

  //   $sql = "DELETE FROM pages ";
  //   $sql .= "WHERE id='" . $id . "' ";
  //   $sql .= "LIMIT 1";
  //   $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
  //   if($result) {
  //     return true;
  //   } else {
  //     // DELETE failed
  //     echo mysqli_error($db);
  //     db_disconnect($db);
  //     exit;
  //   }
  // }

?>
