<form action="" method="get">
    <select name="age" id="">
        <option value="1">< 20</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">> 30</option>
    </select>
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['age'])) {
    switch ($_REQUEST['age']) {
        case 1:
            echo '< 20';
            break;
        case 2:
            echo '20-25';
            break;
        case 3:
            echo '26-30';
            break;
        case 4:
            echo '> 30';
            break;
    }
}
?>