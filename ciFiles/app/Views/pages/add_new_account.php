<main class="page-content" id="manage-accounts">

    <div class="container">

        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>

        <a href="<?php echo site_url("manage-accounts"); ?>" class="btn btn-primary ml-auto" style="margin: 2% 0;">Manage Accounts</a>


        <form action="<?php echo site_url("add-new-account-exe"); ?>" method="post">
        
            <div class="mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="ac_no">Account Number</label>
                <input class="form-control" type="text" name="ac_no" id="ac_no">
            </div>

            <div class="mb-3">
                <label for="ifsc">IFSC</label>
                <input class="form-control" type="text" name="ifsc" id="ifsc">
            </div>

            <div class="mb-3">
                <label for="branch">Branch</label>
                <input class="form-control" type="text" name="branch" id="branch">
            </div>

            <div class="mb-3">
                <label for="balance">Balance</label>
                <input class="form-control" type="text" name="balance" id="balance">
            </div>

            <div class="mb-3">
                <label for="holder_name">Holder Name</label>
                <input class="form-control" type="text" name="holder_name" id="holder_name">
            </div>

            <div class="mb-3">
                <label for="vpa">VPA</label>
                <input class="form-control" type="text" name="vpa" id="vpa">
            </div>

            <button type="submit" class="btn btn-success">Add Account</button>
        
        </form>
            
    </div>

</main>