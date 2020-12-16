<style>
    td{
        width: 10vw;
        text-align:center;
        border: solid 2px lightgrey;
    }
    table{
        border-collapse: collapse;       
        background-color:beige;
    }
</style>
<?php
    echo "<h1>Varuables de Servidor</h1>";
    echo    "<table>
                <tr>
                    <td>SERVER_ADDR</td>
                    <td>" . $_SERVER['SERVER_ADDR'] . "</td>
                </tr>
                <tr>
                    <td>SERVER_PORT</td>
                    <td>" . $_SERVER['SERVER_PORT'] . "</td>
                </tr>
                <tr>
                    <td>SERVER_NAME</td>
                    <td>" . $_SERVER['SERVER_NAME'] . "</td>
                </tr>
                <tr>
                    <td>DOCUMENT_ROOT</td>
                    <td>" . $_SERVER['DOCUMENT_ROOT'] . "</td>
                </tr>
            </table>";

    echo "<h1>Variables de cliente</h1>";
    echo "  <table>
                <tr>
                    <td>REMOTE_ADDR</td>
                    <td>". $_SERVER['REMOTE_ADDR'] ."</td>
                </tr>
                <tr>
                    <td>REMOTE_PORT</td>
                    <td>". $_SERVER['REMOTE_PORT'] ."</td>                    
                </tr>
            </table>";

    echo "<h1>Variables de Requerimiento</h1>";
    echo "  <table>
                <tr>
                    <td>SCRIPT_NAME</td>
                    <td>". $_SERVER['SCRIPT_NAME'] ."</td>
                </tr>
                <tr>
                    <td>REQUEST_METHOD</td>
                    <td>". $_SERVER['REQUEST_METHOD'] ."</td>                    
                </tr>
            </table>";

    echo "<h1>TODO</h1>";
    foreach($_SERVER as $key_name => $key_value) {
        echo "<p>". $key_name . " = " . $key_value . "</p>";
    }
?>