<main class="page-content" id="dashboard">
    <div class="container">
        <h1 class="page-title">Settings</h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>
        <a href="<?php echo site_url("manage-accounts"); ?>" class="btn btn-primary ml-auto" style="margin: 2% 0;">Manage Accounts</a>
        <form action="<?php echo site_url("update-biz-info"); ?>" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="business_name">Business Name</label>
                <input class="form-control" type="text" name="business_name" id="business_name">
            </div>
            <div class="mb-3">
                <label for="business_logo">Business Logo</label>
                <input class="form-control" type="file" name="business_logo" id="business_logo">
            </div>
            <div class="mb-3">
                <label for="gstin">GSTIN</label>
                <input class="form-control" type="text" name="gstin" id="gstin">
            </div>
            <div class="mb-3">
                <label for="mobile_number">Mobile Number</label>
                <input class="form-control" type="text" name="mobile_number" id="mobile_number">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control"></textarea>
            </div>
        </form>
        <button type="button" id="update-settings" class="btn btn-success">Update</button>
    </div>
</main>