<?php

    echo '1. Вывести на страницу «Hello World» (echo и print).<br/>';
    
    echo 'Hello, World!<br/>';
    print 'Hello, World!<br/>';
    
    echo '<br/>2. ESCAPE последовательности: вывести «Hello World»
    в различных вариациях.<br/>';
    
    echo nl2br("<br/>a) Hello,\n World!<br/>");
    echo nl2br("<br/>b) Hello,\n" . "    World!<br/>");
    echo "<br/>c) Hello World. \”It's my page!”\\<br/>";
    echo "<br/>d) <h1>Hello</h1> <h3> World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u><br/>";
    echo "<script>alert('Hello World'); </script><br/>";
    
    echo '<br/>3. Вывести значение, противоположное введенному
    в переменную (input "5", output "-5")<br/>';
    
    $value = 7;
    echo "<br/>Значение переменной " . $value;
    echo "<br/>Противоположное значение " . -$value . "<br/>";
    
    echo '<br/>4. Создать две переменные и вывести результат возможных
     математических операций между ними (+, -, *, /,%).<br/>';
    
    $number1 = 11;
    $number2 = 9;
    echo "<br/>первое число " . $number1 . ", второе число " . $number2;
    echo "<br/>Сумма равна " . $number1 + $number2;
    echo "<br/>Разность равна " . $number1 - $number2;
    echo "<br/>Произведение равно " . $number1 * $number2;
    echo "<br/>Частное равно " . $number1 / $number2;
    echo "<br/>Остаток от деления равен " . $number1 % $number2 . "<br/>";
    
    echo '<br/>5. Поменять два числа местами.<br/>';
    
    $num1 = 7;
    $num2 = 10;
    echo "<br/>первое число " . $num1 . ", второе число " . $num2;
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    echo "<br/>B обратном порядке: первое число " . $num1 . ", второе число " . $num2 . "<br/>";
    
    echo '<br/>6. Создать две переменные: username / password, вывести на
    страницу два input-тега, типа text, где placeholder — это название переменной, 
    a text — значение, записанное в переменную.<br/><br/>';
    
    $username = 'User1';
    $password = 'pass1';
    
    echo '<label for="">Username: <input type="text" placeholder="' . $username . '"></label>';
    echo '<label for=""> Password: <input type="password" placeholder="' . $password . '"></label><br/><br/>';
    
    echo htmlspecialchars('7. Создать страницу, где описать переменные: font_family,
    font_size, font_style. Значение в этих переменных —
    это value соответствующего стиля. вывести тег <p>
    co стилями, описанными в переменных.');
    
    $font_family = 'Arial';
    $font_size = '60px';
    $font_style = 'italic';
    
    echo '<br/>font-family: ' . $font_family . "<br/>";
    echo 'font-size: ' . $font_size . "<br/>";
    echo 'font-style: ' . $font_style . "<br/>";
    echo '<p style="font-family:' . $font_family . '; font-size:' . $font_size . '; font-style:' . $font_style . '">Hello</p>';
    
?>


