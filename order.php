<!DOCTYPE html>
<?php include("dbConn/dbConn.inc.php"); 
    $s_id = $_GET['sid'];
    $sql1 = "SELECT store_CName FROM store WHERE `store_id`= '".$s_id."';";
    $rs1 = mysql_query($sql1);
    $row = mysql_fetch_row($rs1);
    $s_Name = $row[0];
    $sql2 = "SELECT * FROM items WHERE `store_id`= '".$s_id."';";
    $rs2 = mysql_query($sql2);
    $itemNum = mysql_num_rows($rs2);
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
        <div data-role="page" id="p-top" data-add-back-btn="true" data-back-btn-text="回上一頁">
            <div data-role="header">
                <h1>亞大訂餐 (v0.0.1)</h1>
            </div>
            <div data-role="content">
                <form action="order.php" method="post">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <h2><?php echo $s_Name;?></h2>
<?php
                            for($i=0;$i<$itemNum;$i++){
                                $row = mysql_fetch_array($rs2);
                                echo "<input type='checkbox' name='chkbox-".$i."' id='chkbox-".$i."' />
                                      <label for='chkbox-".$i."'>".$row['item_CName']."</label>";
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
