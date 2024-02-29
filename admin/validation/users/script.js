$(document).ready(function () {
  function load_users() {
    $("#users-list").load("./validation/users/get_users.php");
  }
  load_users();
});
