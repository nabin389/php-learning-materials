<!-- <table> directly it also works

</table> -->

<html>
    <head>
        <title>Table</title>
    </head>

    <body>
        <table border = "1">
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Email</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Anil</td>
                <td>Email</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Email</td>
            </tr>
        </table>

        <?php
        echo "<br>";
        echo "<br>";
$users = [
    [1, "anil", "noide", "anil@test.com"],
    [2, "sam", "delhi", "sam@test.com"],
    [3, "peter", "gurgau", "peter@test.com"],
];

//table start outside all loop
echo "<table border = '1'>"; 
for($i=0; $i<count($users); $i++){
    //tr start outside inner loop
    echo "<tr>"; 

    for($j=0;$j<count($users[$i]);$j++){
        //td is inside loop
        echo "<td>".$users[$i][$j]."</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
        ?>
    </body>
</html>