<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Invoice Details</title>
</head>

<body bgcolor="#40C4FF">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="clean-block features">
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: white; width:100%; box-shadow: 0px 2px 3px 3px #cacccc;">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav"></ul>
                                <form class="form-inline mr-auto" target="_self"></form>
                                <span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="retailproducts.php" style="margin-right: 15px;">Admin Home</a>
                            </div>
                        </div>
                    </nav>

                    <div class="container" style=" margin-top: 60px;">
                        <div>
                            <h3><label>Invoice Details</label></h3>
                        </div>
                        <div class="row" style="background-color: white; border-radius: 10px;">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table" border=1 bordercolor="#bfbebd" frame=void rules=rows>
                                        <thead>
                                            <tr>
                                                <th style="width: 10%; padding:10px;">Order Date</th>
                                                <th style="width: 10%;">Customer Email</th>
                                                <th style="width: 10%;">Product Name</th>
                                                <th style="width: 10%;">Product Category</th>
                                                <th style="width: 10%;">Product Cost</th>
                                                <th style="width: 10%;">Product Quantity</th>
                                                <th style="width: 10%;">Total Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form method="post">
                                                <?php
                                                $host = "localhost";
                                                $user = "root";
                                                $password = "";
                                                $database = "retail";

                                                $connect = mysqli_connect($host, $user, $password, $database);
                                                if ($connect) {
                                                } else
                                                    die();
                                                $query = "SELECT*
						                                        FROM invoice";
                                                $result = mysqli_query($connect, $query) or die();
                                                echo "<tbody>";

                                                foreach ($result as $row1) {


                                                    $d1 = $row1['order_date'];
                                                    $d2 = $row1['customer_email'];
                                                    $d3 = $row1['product_name'];
                                                    $d4 = $row1['product_category'];
                                                    $d5 = $row1['product_cost'];
                                                    $d6 = $row1['product_quantity'];
                                                    $d7 = $row1['total_cost'];

                                                    echo ("<td style='width: 15%;padding:10px;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d1</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d2</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d3</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d4</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d5</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d6</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1'>$d7</label></td>");
                                                    echo ("<td style='width: 15%;text-align:center;'><label style='width: 200px;border-radius: 10px;border-width: 0.5px;' minlength='1' maxlength='1' pattern='[D]{1}'></label></td>");

                                                    echo ("</td></tr>\n");
                                                }
                                                echo "</tbody>";
                                                ?>
                                            </form>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- <?php
                                echo ('<div class="col" style="padding-top: 10px;padding-bottom: 20px;"><a class="btn btn-primary" role="button" href="genexcel.php?deflist=' . $defList . '&&proc_alloc=' . $prn . '" style="border-color: rgba(0,0,0,0);border-radius: 20px;margin-left: 42%;">Generate Excel Sheet</a>
                        </div>');
                                ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <p class="copyright" style="text-align: center; font-size: 20px; color: rgb(5,43,92); margin-top: 100px;">GenCoders © 2021</p>
        </footer>
    </div>
    <script src="assets_pro_home/js/jquery.min.js"></script>
    <script src="assets_pro_home/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets_pro_home/js/smoothproducts.min.js"></script>
    <script src="assets_pro_home/js/theme.js"></script>
    <script src="assets_pro_view/js/jquery.min.js"></script>
    <script src="assets_pro_view/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets_pro_view/js/theme.js"></script>
</body>

</html>