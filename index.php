<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
        <link rel="icon" href="data:,"> <!--предотвращение ошибки GET http://project/favicon.ico 404 (Not Found) -->
        <title> PHP table </title>
    </head>
    <body>
        <Table align="center">
            <caption>
                <h4>Таблица истинности php</h4> 
            </caption>
            <colgroup>
                <col span="1" style="background:lightslategrey">
            </colgroup>
            <tr style="background:lightslategrey">
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th> 
            </tr>
            <tr>
                <td><?php echo var_export ($a = 0); ?></td>
                <td><?php echo var_export ($b = 0); ?></td>
                <td><?php echo var_export (!$a); ?></td>
                <td><?php echo var_export ($a || $b); ?></td>
                <td><?php echo var_export ($a && $b); ?></td>
                <td><?php echo var_export ($a xor $b); ?></td>
            </tr>
            <tr>
                <td><?php echo var_export ($a = 0); ?></td>
                <td><?php echo var_export ($b = 1); ?></td>
                <td><?php echo var_export (!$a); ?></td>
                <td><?php echo var_export ($a || $b); ?></td>
                <td><?php echo var_export ($a && $b); ?></td>
                <td><?php echo var_export ($a xor $b); ?></td>
            </tr>
            <tr>
                <td><?php echo var_export ($a = 1); ?></td>
                <td><?php echo var_export ($b = 0); ?></td>
                <td><?php echo var_export (!$a); ?></td>
                <td><?php echo var_export ($a || $b); ?></td>
                <td><?php echo var_export ($a && $b); ?></td>
                <td><?php echo var_export ($a xor $b); ?></td>
            </tr>
            <tr>
                <td><?php echo var_export ($a = 1); ?></td>
                <td><?php echo var_export ($b = 1); ?></td>
                <td><?php echo var_export (!$a); ?></td>
                <td><?php echo var_export ($a || $b); ?></td>
                <td><?php echo var_export ($a && $b); ?></td>
                <td><?php echo var_export ($a xor $b); ?></td>
            </tr>
        </Table >
        <br>
        <Table align="center">
            <caption>
                <h4> Таблица гибкого сравнения php (==) </h4>
            </caption>
            <colgroup>
                <col span="1" style="background:lightslategrey">
            </colgroup>
            <tr style="background:lightslategrey">
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
            <tr>
                <td><b>true</b></td>
                <td><?php echo var_export (true == true); ?></td>
                <td><?php echo var_export (true == false); ?></td>
                <td><?php echo var_export (true == 1); ?></td>
                <td><?php echo var_export (true == 0); ?></td>
                <td><?php echo var_export (true == -1); ?></td>
                <td><?php echo var_export (true == "1"); ?></td>
                <td><?php echo var_export (true == null); ?></td>
                <td><?php echo var_export (true == "php"); ?></td>
            </tr>
            <tr>
                <td><b>false</b></td>
                <td><?php echo var_export (false == true); ?></td>
                <td><?php echo var_export (false == false); ?></td>
                <td><?php echo var_export (false == 1); ?></td>
                <td><?php echo var_export (false == 0); ?></td>
                <td><?php echo var_export (false == -1); ?></td>
                <td><?php echo var_export (false == "1"); ?></td>
                <td><?php echo var_export (false == null); ?></td>
                <td><?php echo var_export (false == "php"); ?></td>
            </tr>
            <tr>
                <td><b>1</b></td>
                <td><?php echo var_export (1 == true); ?></td>
                <td><?php echo var_export (1 == false); ?></td>
                <td><?php echo var_export (1 == 1); ?></td>
                <td><?php echo var_export (1 == 0); ?></td>
                <td><?php echo var_export (1 == -1); ?></td>
                <td><?php echo var_export (1 == "1"); ?></td>
                <td><?php echo var_export (1 == null); ?></td>
                <td><?php echo var_export (1 == "php"); ?></td>
            </tr>
            <tr>
                <td><b>0</b></td>
                <td><?php echo var_export (0 == true); ?></td>
                <td><?php echo var_export (0 == false); ?></td>
                <td><?php echo var_export (0 == 1); ?></td>
                <td><?php echo var_export (0 == 0); ?></td>
                <td><?php echo var_export (0 == -1); ?></td>
                <td><?php echo var_export (0 == "1"); ?></td>
                <td><?php echo var_export (0 == null); ?></td>
                <td><?php echo var_export (0 == "php"); ?></td>
            </tr>
            <tr>
                <td><b>-1</b></td>
                <td><?php echo var_export (-1 == true); ?></td>
                <td><?php echo var_export (-1 == false); ?></td>
                <td><?php echo var_export (-1 == 1); ?></td>
                <td><?php echo var_export (-1 == 0); ?></td>
                <td><?php echo var_export (-1 == -1); ?></td>
                <td><?php echo var_export (-1 == "1"); ?></td>
                <td><?php echo var_export (-1 == null); ?></td>
                <td><?php echo var_export (-1 == "php"); ?></td>
            </tr>
            <tr>
                <td><b>"1"</b></td>
                <td><?php echo var_export ("1" == true); ?></td>
                <td><?php echo var_export ("1" == false); ?></td>
                <td><?php echo var_export ("1" == 1); ?></td>
                <td><?php echo var_export ("1" == 0); ?></td>
                <td><?php echo var_export ("1" == -1); ?></td>
                <td><?php echo var_export ("1" == "1"); ?></td>
                <td><?php echo var_export ("1" == null); ?></td>
                <td><?php echo var_export ("1" == "php"); ?></td>
            </tr>
            <tr>
                <td><b>null</b></td>
                <td><?php echo var_export (null == true); ?></td>
                <td><?php echo var_export (null == false); ?></td>
                <td><?php echo var_export (null == 1); ?></td>
                <td><?php echo var_export (null == 0); ?></td>
                <td><?php echo var_export (null == -1); ?></td>
                <td><?php echo var_export (null == "1"); ?></td>
                <td><?php echo var_export (null == null); ?></td>
                <td><?php echo var_export (null == "php"); ?></td>
            </tr>
            <tr>
                <td><b>"php"</b></td>
                <td><?php echo var_export ("php" == true); ?></td>
                <td><?php echo var_export ("php" == false); ?></td>
                <td><?php echo var_export ("php" == 1); ?></td>
                <td><?php echo var_export ("php" == 0); ?></td>
                <td><?php echo var_export ("php" == -1); ?></td>
                <td><?php echo var_export ("php" == "1"); ?></td>
                <td><?php echo var_export ("php" == null); ?></td>
                <td><?php echo var_export ("php" == "php"); ?></td>
            </tr>
        </Table>
        <br>
        <Table align="center">
            <caption>
                <h4> Таблица жёсткого сравнения php (===) </h4>
            </caption>
            <colgroup>
                <col span="1" style="background:lightslategrey">
            </colgroup>
            <tr style="background:lightslategrey">
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
            <tr>
                <td><b>true</b></td>
                <td><?php echo var_export (true === true); ?></td>
                <td><?php echo var_export (true === false); ?></td>
                <td><?php echo var_export (true === 1); ?></td>
                <td><?php echo var_export (true === 0); ?></td>
                <td><?php echo var_export (true === -1); ?></td>
                <td><?php echo var_export (true === "1"); ?></td>
                <td><?php echo var_export (true === null); ?></td>
                <td><?php echo var_export (true === "php"); ?></td>
            </tr>
            <tr>
                <td><b>false</b></td>
                <td><?php echo var_export (false === true); ?></td>
                <td><?php echo var_export (false === false); ?></td>
                <td><?php echo var_export (false === 1); ?></td>
                <td><?php echo var_export (false === 0); ?></td>
                <td><?php echo var_export (false === -1); ?></td>
                <td><?php echo var_export (false === "1"); ?></td>
                <td><?php echo var_export (false === null); ?></td>
                <td><?php echo var_export (false === "php"); ?></td>
            </tr>
            <tr>
                <td><b>1</b></td>
                <td><?php echo var_export (1 === true); ?></td>
                <td><?php echo var_export (1 === false); ?></td>
                <td><?php echo var_export (1 === 1); ?></td>
                <td><?php echo var_export (1 === 0); ?></td>
                <td><?php echo var_export (1 === -1); ?></td>
                <td><?php echo var_export (1 === "1"); ?></td>
                <td><?php echo var_export (1 === null); ?></td>
                <td><?php echo var_export (1 === "php"); ?></td>
            </tr>
            <tr>
                <td><b>0</b></td>
                <td><?php echo var_export (0 === true); ?></td>
                <td><?php echo var_export (0 === false); ?></td>
                <td><?php echo var_export (0 === 1); ?></td>
                <td><?php echo var_export (0 === 0); ?></td>
                <td><?php echo var_export (0 === -1); ?></td>
                <td><?php echo var_export (0 === "1"); ?></td>
                <td><?php echo var_export (0 === null); ?></td>
                <td><?php echo var_export (0 === "php"); ?></td>
            </tr>
            <tr>
                <td><b>-1</b></td>
                <td><?php echo var_export (-1 === true); ?></td>
                <td><?php echo var_export (-1 === false); ?></td>
                <td><?php echo var_export (-1 === 1); ?></td>
                <td><?php echo var_export (-1 === 0); ?></td>
                <td><?php echo var_export (-1 === -1); ?></td>
                <td><?php echo var_export (-1 === "1"); ?></td>
                <td><?php echo var_export (-1 === null); ?></td>
                <td><?php echo var_export (-1 === "php"); ?></td>
            </tr>
            <tr>
                <td><b>"1"</b></td>
                <td><?php echo var_export ("1" === true); ?></td>
                <td><?php echo var_export ("1" === false); ?></td>
                <td><?php echo var_export ("1" === 1); ?></td>
                <td><?php echo var_export ("1" === 0); ?></td>
                <td><?php echo var_export ("1" === -1); ?></td>
                <td><?php echo var_export ("1" === "1"); ?></td>
                <td><?php echo var_export ("1" === null); ?></td>
                <td><?php echo var_export ("1" === "php"); ?></td>
            </tr>
            <tr>
                <td><b>null</b></td>
                <td><?php echo var_export (null === true); ?></td>
                <td><?php echo var_export (null === false); ?></td>
                <td><?php echo var_export (null === 1); ?></td>
                <td><?php echo var_export (null === 0); ?></td>
                <td><?php echo var_export (null === -1); ?></td>
                <td><?php echo var_export (null === "1"); ?></td>
                <td><?php echo var_export (null === null); ?></td>
                <td><?php echo var_export (null === "php"); ?></td>
            </tr>
            <tr>
                <td><b>"php"</b></td>
                <td><?php echo var_export ("php" === true); ?></td>
                <td><?php echo var_export ("php" === false); ?></td>
                <td><?php echo var_export ("php" === 1); ?></td>
                <td><?php echo var_export ("php" === 0); ?></td>
                <td><?php echo var_export ("php" === -1); ?></td>
                <td><?php echo var_export ("php" === "1"); ?></td>
                <td><?php echo var_export ("php" === null); ?></td>
                <td><?php echo var_export ("php" === "php"); ?></td>
            </tr>
        </Table>
        <div>
            <p> Выводы: если надо проверить равенство переменных с учётом типов данных, то надо использовать жёсткое сравнение, 
если без учёта такового, то нужно использовать гибкое сравнение. Во избежании ошибок предпочтительней использовать
жёсткое сравнение, приведя переменные к одному типу.</p>
        </div>
    </body>
</html>
