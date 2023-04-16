<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
<table id="tableTrue">
<caption>Таблица истинности PHP</caption>
<tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>
<tr>
<td><?php $a = 0; echo $a;?></td>
<td><?php $b = 0; echo $b;?></td>
<td><?php echo !$a;?></td>
<td><?php $c = $a || $b;
echo $d = (int)$c; ?></td>
<td><?php $c = $a && $b;
echo $d = (int)$c;?></td>
<td><?php $c = $a xor $b;
echo $d = (int)$c;?></td>
</tr>
<tr>
<td><?php $a = 0; echo $a;?></td>
<td><?php $b = 1; echo $b;?></td>
<td><?php echo !$a;?></td>
<td><?php echo $a || $b;?></td>
<td><?php $c = $a && $b;
echo $d = (int)$c;?></td>
<td><?php echo $a xor $b;?></td>
</tr>
<tr>
<td><?php $a = 1; echo $a;?></td>
<td><?php $b = 0; echo $b;?></td>
<td><?php $c = !$a;
echo $d = (int)$c;?></td>
<td><?php echo $a || $b;?></td>
<td><?php $c = $a && $b;
echo $d = (int)$c;?></td>
<td><?php echo $a xor $b;?></td>
</tr>
<tr>
<td><?php $a = 1; echo $a;?></td>
<td><?php $b = 1; echo $b;?></td>
<td><?php $b = !$a;
echo $c = (int)$b;?></td>
<td><?php echo $a || $b;?></td>
<td><?php $c = $a && $b;
echo $d = (int)$c;?></td>
<td><?php echo $a xor $b;?></td>
</tr>
</table>

<table id="tableContrast">
<caption>Таблица "Гибкое сравнениe в PHP"</caption>
<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
<tr><td>true</td>
<td><?php $a = (true == true);
echo $b = (int)$a;?></td>
<td><?php $a = (true == false);
echo $b = (int)$a;?></td>
<td><?php $a = (true == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (true == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (true == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (true == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (true == null);
echo $b = (int)$a;?></td>
<td><?php $a = (true == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>false</td>
<td><?php $a = (false == true);
echo $b = (int)$a;?></td>
<td><?php $a = (false == false);
echo $b = (int)$a;?></td>
<td><?php $a = (false == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (false == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (false == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (false == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (false == null);
echo $b = (int)$a;?></td>
<td><?php $a = (false == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>1</td>
<td><?php $a = (1 == true);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == false);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (1 == null);
echo $b = (int)$a;?></td>
<td><?php $a = (1 == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>0</td>
<td><?php $a = (0 == true);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == false);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (0 == null);
echo $b = (int)$a;?></td>
<td><?php $a = (0 == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>-1</td>
<td><?php $a = (-1 == true);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == false);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == null);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>"1"</td>
<td><?php $a = ("1" == true);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == false);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == 1);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == 0);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == -1);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == "1");
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == null);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>null</td>
<td><?php $a = (null == true);
echo $b = (int)$a;?></td>
<td><?php $a = (null == false);
echo $b = (int)$a;?></td>
<td><?php $a = (null == 1);
echo $b = (int)$a;?></td>
<td><?php $a = (null == 0);
echo $b = (int)$a;?></td>
<td><?php $a = (null == -1);
echo $b = (int)$a;?></td>
<td><?php $a = (null == "1");
echo $b = (int)$a;?></td>
<td><?php $a = (null == null);
echo $b = (int)$a;?></td>
<td><?php $a = (null == "php");
echo $b = (int)$a;?></td></tr>
<tr><td>"php"</td>
<td><?php $a = ("php" == true);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == false);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == 1);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == 0);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == -1);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == "1");
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == null);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" == "php");
echo $b = (int)$a;?></td></tr>
</table>

<table id="tableContrast2">
<caption>Таблица "Жесткое сравнениe в PHP"</caption>
<tr><th></th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>"1"</th><th>null</th><th>"php"</th></tr>
<tr><td>true</td>
<td><?php $a = (true === true);
echo $b = (int)$a;?></td>
<td><?php $a = (true === false);
echo $b = (int)$a;?></td>
<td><?php $a = (true === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (true === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (true === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (true === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (true === null);
echo $b = (int)$a;?></td>
<td><?php $a = (true === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>false</td>
<td><?php $a = (false === true);
echo $b = (int)$a;?></td>
<td><?php $a = (false === false);
echo $b = (int)$a;?></td>
<td><?php $a = (false === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (false === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (false === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (false === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (false === null);
echo $b = (int)$a;?></td>
<td><?php $a = (false === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>1</td>
<td><?php $a = (1 === true);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === false);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (1 === null);
echo $b = (int)$a;?></td>
<td><?php $a = (1 === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>0</td>
<td><?php $a = (0 === true);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === false);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (0 === null);
echo $b = (int)$a;?></td>
<td><?php $a = (0 === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>-1</td>
<td><?php $a = (-1 === true);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === false);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === null);
echo $b = (int)$a;?></td>
<td><?php $a = (-1 === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>"1"</td>
<td><?php $a = ("1" === true);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === false);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === 1);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === 0);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === -1);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === "1");
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === null);
echo $b = (int)$a;?></td>
<td><?php $a = ("1" === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>null</td>
<td><?php $a = (null === true);
echo $b = (int)$a;?></td>
<td><?php $a = (null === false);
echo $b = (int)$a;?></td>
<td><?php $a = (null === 1);
echo $b = (int)$a;?></td>
<td><?php $a = (null === 0);
echo $b = (int)$a;?></td>
<td><?php $a = (null === -1);
echo $b = (int)$a;?></td>
<td><?php $a = (null === "1");
echo $b = (int)$a;?></td>
<td><?php $a = (null === null);
echo $b = (int)$a;?></td>
<td><?php $a = (null === "php");
echo $b = (int)$a;?></td></tr>
<tr><td>"php"</td>
<td><?php $a = ("php" === true);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === false);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === 1);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === 0);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === -1);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === "1");
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === null);
echo $b = (int)$a;?></td>
<td><?php $a = ("php" === "php");
echo $b = (int)$a;?></td></tr>
</table>

</body>
</html>