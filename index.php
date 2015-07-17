<!DOCTYPE html>
<?php include("dbConn/dbConn.inc.php"); 
    $sql = "SELECT store_id, store_CName FROM store WHERE 1;";
    $rs1 = mysql_query($sql);
    $storNum = mysql_num_rows($rs1);
//    $row = mysql_fetch_row($rs1);
?>
<html>
    <head>
        <title>Jack's Web</title>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css"/>
        <script src = "js/jquery-2.1.4.min.js"></script>
        <script src = "js/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
        <div data-role="page" data-add-back-btn="true" data-back-btn-text="Back">
            <div data-role="header">
                <h1>亞大訂餐 (v0.0.1)</h1>
            </div>
            <div data-role="content">
                <form action="order.php" method="post">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <h1>餐廳</h1>
<?php
                            for($i=0;$i<$storNum;$i++){
                                $row = mysql_fetch_row($rs1);
                                echo "<a href=\"order.php?sid=".$row[0]."\" data-role='button'>".$row[1]."</a>";
                            }
?>
                        </fieldset>
                    </div>
                </form>
            </div>
            <div data-role = "footer">
                <h1>這裡是頁腳</h1>
            </div>
        </div>
    </body>
</html>
