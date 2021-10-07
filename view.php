<?php
include 'database.php';

$sid = $_GET['sid'];
echo "update record no: $sid";


$result = mysql_query("SELECT * FROM stud WHERE sid = '$sid'", $con);
$num_rows = mysql_num_rows($result);
	while($rowval = mysql_fetch_array($result))
{
    $sname = $rowval['sname'];
    $mob = $rowval['mob'];
}
?>


<form id="form1" name="form1" method="post" action="">

    <table width="200" border="1">
        <tr>
            <td>sid</td>
            <td><label>
                    <input name="sid" type="text" id="sid" size="5" value="<?php echo  $sid; ?>" />
                </label></td>
        </tr>
        <tr>
            <td>sname</td>
            <td><label>
                    <input name="sname" type="text" id="sname" value="<?php echo  $sname; ?>" />
                </label></td>
        </tr>

        <tr>
            <td>mob</td>
            <td><label>
                    <input name="mob" type="text" id="mob" size="10" value="<?php echo  $mob; ?>" />
                </label></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><label>
                    <input name="save" type="button" id="back" value="back" onclick="location.href = 'record.php';" />
                </label></td>
        </tr>
    </table>
</form>
