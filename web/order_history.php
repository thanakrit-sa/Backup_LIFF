<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style_profile.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<?

?>

<body>
    <div class="container mt-1">
        <div class="card">
            <div class="card-body" align="center">
                <h3>Order History</h3>
                <hr>
                <div class="card shadow p-0 mb-0 bg-white rounded">
                    <div class="card-body p-0 m-0">
                        <div class="row p-0 m-0">
                            <div class="col-3 p-0 m-0">
                                <img src="top.jpg" id="img-content" class="img-fluid p-0 m-0">
                            </div>
                            <article class="col-8 py-2" align="left">
                                <b>Receipt</b> RTXY-02214445332 <br>
                                <b>Date</b> 20/12/2060 12:45 AM<br>
                                <b>Status</b> Received
                            </article>
                            <div id="received" class="col-1 p-0 m-0"></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card shadow p-0 mb-0 bg-white rounded">
                    <div class="card-body p-0 m-0">
                        <div class="row p-0 m-0">
                            <div class="col-3 p-0 m-0">
                                <img src="top.jpg" id="img-content" class="img-fluid p-0 m-0">
                            </div>
                            <article class="col-8 py-2" align="left">
                                <b>Receipt</b> RTXY-02214445332 <br>
                                <b>Date</b> 20/12/2060 12:45 AM<br>
                                <b>Status</b> Sending
                            </article>
                            <div id="sending" class="col-1 p-0 m-0"></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card shadow p-0 mb-0 bg-white rounded">
                    <div class="card-body p-0 m-0">
                        <div class="row p-0 m-0">
                            <div class="col-3 p-0 m-0">
                                <img src="top.jpg" id="img-content" class="img-fluid p-0 m-0">
                            </div>
                            <article class="col-8 py-2" align="left">
                                <b>Receipt</b> RTXY-02214445332 <br>
                                <b>Date</b> 20/12/2060 12:45 AM<br>
                                <b>Status</b> Cancel
                            </article>
                            <div id="cancel" class="col-1 p-0 m-0"></div>
                        </div>
                    </div>
                </div>
                <hr>
                <nav aria-label="Page navigation example p-0 m-0">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">
                                1
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>