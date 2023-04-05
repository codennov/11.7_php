<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=" minimal-table.css" rel="stylesheet" type="text/css">
</head>

<body>


    <h2> Практика 11.7</h2>
    <table>
        <caption>Таблица истинности PHP</caption>
        <thead>
            <tr>
                <!-- scope делает читаемые заголовки для Скринридера 
                 col - указывает на заголовки столбцов-->

                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">!A</th>
                <th scope="col">A || B</th>
                <th scope="col">A && B</th>
                <th scope="col">A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $A = 0;
                    echo (int)$A; ?></td>
                <td><?php $B = 0;
                    echo (int)$B; ?></td>
                <td><?php echo (int)!$A; ?></td>
                <td><?php echo (int)($A || $B); ?></td>
                <td><?php echo (int)($A && $B); ?></td>
                <td><?php echo (int)($A xor $B); ?></td>
            </tr>
            <tr>
                <td><?php $A = 0;
                    echo (int)$A; ?></td>
                </td>
                <td><?php $B = 1;
                    echo (int)$B; ?></td>
                <td><?php echo (int)!$A; ?></td>
                <td><?php echo (int)($A || $B); ?></td>
                <td><?php echo (int)($A && $B); ?></td>
                <td><?php echo (int)($A xor $B); ?></td>
            </tr>

            <tr>
                <td><?php $A = 1;
                    echo (int)$A; ?></td>
                </td>
                <td><?php $B = 0;
                    echo (int)$B; ?></td>
                <td><?php echo (int)!$A; ?></td>
                <td><?php echo (int)($A || $B); ?></td>
                <td><?php echo (int)($A && $B); ?></td>
                <td><?php echo (int)($A xor $B); ?></td>
            </tr>
            <tr>
                <td><?php $A = 1;
                    echo $A; ?></td>
                <td><?php $B = 1;
                    echo $B; ?></td>
                <td><?php echo (int)!$A; ?></td>
                <td><?php echo (int)($A || $B); ?></td>
                <td><?php echo (int)($A && $B); ?></td>
                <td><?php echo (int)($A xor $B); ?></td>
            </tr>
        </tbody>
    </table>

    <table>
        <caption>Гибкое сравнение в РНР</caption>

        <tr>
            <th scope="col">==</th>
            <th scope="col">true</th>
            <th scope="col">false</th>
            <th scope="col">1</th>
            <th scope="col">0</th>
            <th scope="col">-1</th>
            <th scope="col">"1"</th>
            <th scope="col">null</th>
            <th scope="col">"php"</th>
        </tr>
        <tr>
        <!-- Использую var_export вместо var_dump чтобы получить
         в таблице при выаоде "true"/"false". С var_dump вывод выглядит
         bool(true)/bool(false)-->

            <th scope="row">true</th>
            <td><?php var_export(true == true); ?></td>
            <td><?php var_export(true == false); ?></td>
            <td><?php var_export(true == 1); ?></td>
            <td><?php var_export(true == 0); ?></td>
            <td><?php var_export(true == -1); ?></td>
            <td><?php var_export(true == "1"); ?></td>
            <td><?php var_export(true == null); ?></td>
            <td><?php var_export(true == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">false</th>
            <td><?php var_export(false == true); ?></td>
            <td><?php var_export(false == false); ?></td>
            <td><?php var_export(false == 1); ?></td>
            <td><?php var_export(false == 0); ?></td>
            <td><?php var_export(false == -1); ?></td>
            <td><?php var_export(false == "1"); ?></td>
            <td><?php var_export(false == null); ?></td>
            <td><?php var_export(false == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td><?php var_export(1 == true); ?></td>
            <td><?php var_export(1 == false); ?></td>
            <td><?php var_export(1 == 1); ?></td>
            <td><?php var_export(1 == 0); ?></td>
            <td><?php var_export(1 == -1); ?></td>
            <td><?php var_export(1 == "1"); ?></td>
            <td><?php var_export(1 == null); ?></td>
            <td><?php var_export(1 == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">0</th>
            <td><?php var_export(0 == true); ?></td>
            <td><?php var_export(0 == false); ?></td>
            <td><?php var_export(0 == 1); ?></td>
            <td><?php var_export(0 == 0); ?></td>
            <td><?php var_export(0 == -1); ?></td>
            <td><?php var_export(0 == "1"); ?></td>
            <td><?php var_export(0 == null); ?></td>
            <td><?php var_export(0 == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">-1</th>
            <td><?php var_export(-1 == true); ?></td>
            <td><?php var_export(-1 == false); ?></td>
            <td><?php var_export(-1 == 1); ?></td>
            <td><?php var_export(-1 == 0); ?></td>
            <td><?php var_export(-1 == -1); ?></td>
            <td><?php var_export(-1 == "1"); ?></td>
            <td><?php var_export(-1 == null); ?></td>
            <td><?php var_export(-1 == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">"1"</th>
            <td><?php var_export("1" == true); ?></td>
            <td><?php var_export("1" == false); ?></td>
            <td><?php var_export("1" == 1); ?></td>
            <td><?php var_export("1" == 0); ?></td>
            <td><?php var_export("1" == -1); ?></td>
            <td><?php var_export("1" == "1"); ?></td>
            <td><?php var_export("1" == null); ?></td>
            <td><?php var_export("1" == "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">null</th>
            <td><?php var_export(null == true); ?></td>
            <td><?php var_export(null == false); ?></td>
            <td><?php var_export(null == 1); ?></td>
            <td><?php var_export(null == 0); ?></td>
            <td><?php var_export(null == -1); ?></td>
            <td><?php var_export(null == "1"); ?></td>
            <td><?php var_export(null == null); ?></td>
            <td><?php var_export(null== "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">"php"</th>
            <td><?php var_export("php" == true); ?></td>
            <td><?php var_export("php" == false); ?></td>
            <td><?php var_export("php"== 1); ?></td>
            <td><?php var_export("php" == 0); ?></td>
            <td><?php var_export("php" == -1); ?></td>
            <td><?php var_export("php" == "1"); ?></td>
            <td><?php var_export("php" == null); ?></td>
            <td><?php var_export("php"== "php"); ?></td>
        </tr>
    </table>


    <table>
        <!-- Я хотела в этоq таблице жесткого сравнения выделить true, но я так и не 
        разобралась как это сделать в зависимости от значения в ячейке. Сделала просто назначением 
        style в нужном тэге td-->

        <caption>Жесткое сравнение в РНР</caption>   
        
        <tr>
            <th scope="col">===</th>
            <th scope="col">true</th>
            <th scope="col">false</th>
            <th scope="col">1</th>
            <th scope="col">0</th>
            <th scope="col">-1</th>
            <th scope="col">"1"</th>
            <th scope="col">null</th>
            <th scope="col">"php"</th>
        </tr>
        <tr>
            <th scope="row">true</th>
            <td style="background-color:coral"><?php var_export(true === true); ?></td>
            <td><?php var_export(true === false); ?></td>
            <td><?php var_export(true === 1); ?></td>
            <td><?php var_export(true === 0); ?></td>
            <td><?php var_export(true === -1); ?></td>
            <td><?php var_export(true === "1"); ?></td>
            <td><?php var_export(true === null); ?></td>
            <td><?php var_export(true === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">false</th>
            <td><?php var_export(false === true); ?></td>
            <td style="background-color:coral"><?php var_export(false === false); ?></td>
            <td><?php var_export(false === 1); ?></td>
            <td><?php var_export(false === 0); ?></td>
            <td><?php var_export(false === -1); ?></td>
            <td><?php var_export(false === "1"); ?></td>
            <td><?php var_export(false === null); ?></td>
            <td><?php var_export(false === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td><?php var_export(1 === true); ?></td>
            <td><?php var_export(1 === false);?></td>
            <td style="background-color:coral"><?php var_export(1 === 1); ?></td>
            <td><?php var_export(1 === 0); ?></td>
            <td><?php var_export(1 === -1); ?></td>
            <td><?php var_export(1 === "1"); ?></td>
            <td><?php var_export(1 === null); ?></td>
            <td><?php var_export(1 === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">0</th>
            <td><?php var_export(0 === true); ?></td>
            <td><?php var_export(0 === false);?></td>
            <td><?php var_export(0 === 1); ?></td>
            <td style="background-color:coral"><?php var_export(0 === 0); ?></td>
            <td><?php var_export(0 === -1); ?></td>
            <td><?php var_export(0 === "1"); ?></td>
            <td><?php var_export(0 === null); ?></td>
            <td><?php var_export(0 === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">-1</th>
            <td><?php var_export(-1 === true); ?></td>
            <td><?php var_export(-1 === false);?></td>
            <td><?php var_export(-1 === 1); ?></td>
            <td><?php var_export(-1 === 0); ?></td>
            <td style="background-color:coral"><?php var_export(-1 === -1); ?></td>
            <td><?php var_export(-1 === "1"); ?></td>
            <td><?php var_export(-1 === null); ?></td>
            <td><?php var_export(-1 === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">"1"</th>
            <td><?php var_export("1" === true); ?></td>
            <td><?php var_export("1" === false);?></td>
            <td><?php var_export("1" === 1); ?></td>
            <td><?php var_export("1" === 0); ?></td>
            <td><?php var_export("1" === -1); ?></td>
            <td style="background-color:coral"><?php var_export("1" === "1"); ?></td>
            <td><?php var_export("1" === null); ?></td>
            <td><?php var_export("1" === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">null</th>
            <td><?php var_export(null === true); ?></td>
            <td><?php var_export(null === false);?></td>
            <td><?php var_export(null === 1); ?></td>
            <td><?php var_export(null === 0); ?></td>
            <td><?php var_export(null === -1); ?></td>
            <td><?php var_export(null === "1"); ?></td>
            <td style="background-color:coral"><?php var_export(null === null);?></td>
            <td><?php var_export(null === "php"); ?></td>
        </tr>
        <tr>
            <th scope="row">"php"</th>
            <td><?php var_export("php" === true); ?></td>
            <td><?php var_export("php" === false); ?></td>
            <td><?php var_export("php" === 1); ?></td>
            <td><?php var_export("php" === 0); ?></td>
            <td><?php var_export("php" === -1); ?></td>
            <td><?php var_export("php" === "1"); ?></td>
            <td><?php var_export("php" === null); ?></td>
            <td style="background-color:coral"><?php var_export("php" === "php"); ?></td>
        </tr>

        

    </table>

    
<?php
include 'about.php';
?>


</body>

</html>