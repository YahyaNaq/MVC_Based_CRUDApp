<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="/" method="POST">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?= trim($_GET["id"]); ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <button type="submit" class="btn btn-danger">Yes</button>
                                <a href="/" class="btn btn-secondary ml-2">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>