<?php
require "../connect.php";

$show = $_GET['show'];

$data = $conn->query("SELECT * FROM `purchase`");

$active = $conn->query("SELECT COUNT(*) as `data` FROM `purchase` WHERE `status` = 1");
$active = $active->fetch_assoc();

$archived = $conn->query("SELECT COUNT(*) as `data` FROM `purchase` WHERE `status` = 0");
$archived = $archived->fetch_assoc();
?>

<a id="show-all" class="navigation__link <?php if ($show == 2) {
    echo 'navigation-active';
} ?>" href="javascript:void(0)">
    <?php echo "Усі ( " . mysqli_num_rows($data) . " )" ?>
</a>
<a id="show-active" class="navigation__link <?php if ($show == 1) {
    echo 'navigation-active';
} ?>" href="javascript:void(0)">
    <?php echo "Активні ( " . $active['data'] . " )"; ?>
</a>
<a id="show-archived" class="navigation__link <?php if ($show == 0) {
    echo 'navigation-active';
} ?>" href="javascript:void(0)">
    <?php echo "Архівовані ( " . $archived['data'] . " )"; ?>
</a>

<script>
    $(document).ready(function () {
        $("#show-all").click(function () {
            $("#purchases-box").load("./validation/income/get_purchases.php?show=2");
            $("#navigation").load("./validation/income/navigation.php?show=2");
        });
        $("#show-active").click(function () {
            $("#purchases-box").load("./validation/income/get_purchases.php?show=1");
            $("#navigation").load("./validation/income/navigation.php?show=1");
        });
        $("#show-archived").click(function () {
            $("#purchases-box").load("./validation/income/get_purchases.php?show=0");
            $("#navigation").load("./validation/income/navigation.php?show=0");
        });
    });
</script>