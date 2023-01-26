<style>
    p {
        text-align: center;
        margin: 40px 0;
    }

    a {
        width: 160px;
        display: block;
        margin: auto;
        padding: 10px;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 10px;
        color: black;
    }

    a:hover {
        background-color: beige;
        transition: .5s;
        font-weight: 900;
    }

</style>

<?php

echo ' 3. Разработать функцию, которая на входе принимает текст и слово и проверяет,
есть ли такое слово в тексте. Если есть, посчитать сколько раз оно встречается в тексте.
Функция возвращает количество повторов или 0, если не нашла данного слова в тексте. ';

function counter(string $text, string $word): int {
    return substr_count($text, $word);
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus finibus risus iaculis consequat. Nullam dictum rutrum sapien eget lobortis. Integer eget ultricies nunc. Suspendisse vel tortor quis mauris suscipit auctor. Aliquam non ultricies odio. Aliquam eget arcu dui. Etiam purus arcu, consequat ultricies libero sed, aliquam bibendum nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ut tristique ipsum. Donec sed libero quis arcu porttitor eleifend. Etiam gravida rutrum est ut rutrum.";
$word = "el";
?>

<div>
    <p><?= str_replace($word, '<span style="color: red;">'.$word.'</span>', $text)?></p>
    <p>Word to Find: <?= $word?></p>
    <p>Result: <?= counter($text, $word) ?></p>
</div>

<p><a href="task4.php">Next</a></p>