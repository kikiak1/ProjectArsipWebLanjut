<!doctype html>
<html lang="en">
<head>
<style>
body {
background-image: url(https://4.bp.blogspot.com/-gesHVyLBnnw/Wc0f12t-RpI/AAAAAAAAGYg/3fQL5k9SncwEh_0O-9Q5YbrdOyns2LWUQCLcBGAs/w1200-h630-p-k-no-nu/ordiner.jpg);
background-color: coral;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="p-3 mb-2 bg-body text-dark">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-5">                   
                    <h2>Login</h2>               
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <form action="<?php echo base_url(); ?>/Login/auth" method="post">
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" >
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>