<!DOCTYPE html>
<html lang="en">
    
<head>
    <?php $this->load->view('admin/_partials/head.php')?>
</head>

<body>
    <main class="main">
        <?php $this->load->view('admin/_partials/side_nav.php')?>

        <div class="content">
            <h1>Overview</h1>
            <p><b>13</b><span class="text-gray">Post</span></p>
            <p><b>11</b><span class="text-gray">Feedback</span></p>

            <?php $this->load->view('admin/_partials/footer.php')?>
        </div>
    </main>
</body>
</html>
