<?php 

$url = $_GET['page'];

switch ($url) {
    case 'about':
        echo '<script>window.location.href = "./pages/about.php"</script>';
        break;

    case 'plans':
        echo '<script>window.location.href = "./pages/plans.php"</script>';
        break;
    
    default:
        # code...
        break;
}

?>