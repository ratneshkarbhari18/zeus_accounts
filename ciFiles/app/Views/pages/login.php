    <main class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12"></div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    
                    <h1 class="text-center">Login</h1>
                    <p class="text-center text-success"><?php echo $success; ?></p>
                    <p class="text-center text-danger"><?php echo $error; ?></p>

                    <form action="<?php echo site_url("login-exe"); ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Login</button>

                    </form>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </main>
</body>
</html>