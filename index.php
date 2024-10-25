<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 9, Дубцов М.С, группа 231-361, вариант 5</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="/images/university_logo.png" alt="University Logo">
        </div>
        <div class="header-info">
            <div class="student-info">
                <span>Дубцов Максим Сергеевич</span><br>
                <span>Группа: 231-361</span><br>
                <span>Лабораторная работа: 9<span><br>
                <span>Вариант: 5</span>
            </div>
        </div>
    </header>

    <main>
        <div class="content">
            <h1>Лабораторная работа №9</h1>
            <?php
            $x = -10;
            $encounting = 100;
            $step = 1;
            $min_value = -1000;
            $max_value = 1000;
            $type = 'Маркированный список';
            $values = [];

            function calculate($x)
            {
                if ($x <= 10) {
                    return round(3 * $x + 9, 3);
                } 
                elseif ($x > 10 && $x < 20) {
                    if ($x == 11) {
                        return "error";
                    }
                    return round(($x + 3) / ($x ** 2 - 121), 3);
                } else {
                    return round($x ** 2 * 4, 3);
                }
            }

            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                $f = calculate($x);
            
                if ($f == "error") {
                    switch ($type) {
                        case 'Простая верстка текстом':
                            echo "f($x) = error<br>";
                            break;
                        case 'Маркированный список':
                            if ($i == 0) echo "<ul>";
                            echo "<li>f($x) = error</li>";
                            echo "</ul>";
                            break;
                        case 'Нумерованный список':
                            if ($i == 0) echo "<ol>";
                            echo "<li>f($x) = error</li>";
                            echo "</ol>";
                            break;
                        case 'Табличная верстка':
                            if ($i == 0) echo "<table border='1' style='border-collapse: collapse; margin-top: 10px'><tr><th>№</th><th>x</th><th>f(x)</th></tr>";
                            echo "<tr><td>" . ($i + 1) . "</td><td>$x</td><td>error</td></tr>";
                            echo "</table>";
                            break;
                        case 'Блочная верстка':
                            echo "<div style='float: left; border: 2px solid red; margin-top: 10px; margin-right: 8px;'>f($x) = error</div>";
                            break;
                    }
                    break;
                }
            
                if ($f < $min_value || $f > $max_value) {
                    break;
                }
            
                $values[] = $f;
            
                switch ($type) {
                    case 'Простая верстка текстом':
                        echo "f($x)=$f<br>";
                        break;
                    case 'Маркированный список':
                        if ($i == 0)
                            echo "<ul>";
                        echo "<li>f($x)=$f</li>";
                        if ($i == $encounting - 1)
                            echo "</ul>";
                        break;
                    case 'Нумерованный список':
                        if ($i == 0)
                            echo "<ol>";
                        echo "<li>f($x)=$f</li>";
                        if ($i == $encounting - 1)
                            echo "</ol>";
                        break;
                    case 'Табличная верстка':
                        if ($i == 0)
                            echo "<table border='1' style='border-collapse: collapse; margin-top: 10px'><tr><th>№</th><th>x</th><th>f(x)</th></tr>";
                        echo "<tr><td>" . ($i + 1) . "</td><td>$x</td><td>$f</td></tr>";
                        if ($i == $encounting - 1)
                            echo "</table>";
                        break;
                    case 'Блочная верстка':
                        echo "<div style='float: left; border: 2px solid red; margin-top: 10px; margin-right: 8px;'>f($x)=$f</div>";
                        break;
                }
            }
            $max_f = max($values);
            $min_f = min($values);
            $sum_f = array_sum($values);
            $average_f = round($sum_f / count($values), 3);

            echo "<br><br><br><br>Максимальное значение функции: $max_f<br>";
            echo "Минимальное значение функции: $min_f<br>";
            echo "Среднее арифметическое всех значений функции: $average_f<br>";
            echo "Сумма всех значений функции: $sum_f<br>";
            ?>
        </div>
    </main>

    <footer>
        <div class="footer-info">
            &copy; 2024 Дубцов Максим Сергеевич
            <?php echo "Тип верстки: $type" ?>
        </div>
    </footer>
</body>
</html>