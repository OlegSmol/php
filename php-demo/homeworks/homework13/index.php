<style>
    li {
        list-style: none;
    }

    .category {
        border: none;
        background-color: white;
    }

    .red {
        background-color: red;
    }

    span {
        font-weight: 800;
    }
</style>

<?php
include "product.php";

session_start();

$products = [
    new Phone("iPhone 7", 1000, "Phone", "Apple", "A9", 1024, 1, 128, "IOS"),
    new Phone("Galaxy S10", 1000, "Phone", "Samsung", "Snapdragon 860", 3072, 2, 128, "Android"),
    new Phone("Lumia 720", 350, "Phone", "Nokia", "Snapdragon 300", 500, 1, 32, "Windown Phone"),
    new Monitor("S24E650", 100, "Monitor", "Samsung", "model", 21, 60, "VGA, HDMI, DisplayPort"),
    new Monitor("Apple Sinema Display", 10000, "Monitor", "Apple", "model", 24, 144, "HDMI, DisplayPort")
];

// 4. B файле index.php сделать массив категорий, перейти в массив продуктов и, если продукт — Phone, 
// добавить в listProducts категорию PhoneCategory, если продукт — Monitor, добавить в listProducts 
// категорию MonitorCategory.

$categories = [];

if (isset($_SESSION['category'])) {
    $categories = $_SESSION['category'];
}

foreach ($products as $product) {

    if ($product->getDescription() == "Phone") {

        if (isset($_SESSION['filtersPhone'])) {
            $filters = $_SESSION['filtersPhone'];
        }

        $count = 0;
        foreach ($categories as $category) {
            if ($category->name == "Phones") {
                $count += 1;
            }
        }

        if ($count == 0) {

            $filters['price'] = $product->price;
            $filters['ram'] = $product->ram;
            $filters['countSim'] = $product->countSim;
            $filters['hdd'] = $product->hdd;
            $filters['os'] = $product->os;

            $filters['price-min'] = $filters['price'];
            $filters['price-max'] = $filters['price'];
            $filters['ram-min'] = $filters['ram'];
            $filters['ram-max'] = $filters['ram'];
            $filters['countSim-min'] = $filters['countSim'];
            $filters['countSim-max'] = $filters['countSim'];
            $filters['hdd-min'] = $filters['hdd'];
            $filters['hdd-max'] = $filters['hdd'];
            // $filters['os'] = $product->os;

            $_SESSION['filtersPhone'] = $filters;

            $listProducts[] = $product;

            $categories[] = new PhoneCategory('Phones', $filters, $listProducts);

        } else {

            if ($product->price < $filters['price-min']) {
                $filters['price-min'] = $product->price;
            }
            if ($product->price > $filters['price-max']) {
                $filters['price-max'] = $product->price;
            }
            if ($product->ram < $filters['ram-min']) {
                $filters['ram-min'] = $product->ram;
            }
            if ($product->ram > $filters['ram-max']) {
                $filters['ram-max'] = $product->ram;
            }
            if ($product->countSim < $filters['countSim-min']) {
                $filters['countSim-min'] = $product->countSim;
            }
            if ($product->countSim > $filters['countSim-max']) {
                $filters['countSim-max'] = $product->countSim;
            }
            if ($product->hdd < $filters['hdd-min']) {
                $filters['hdd-min'] = $product->hdd;
            }
            if ($product->hdd > $filters['hdd-max']) {
                $filters['hdd-max'] = $product->hdd;
            }

            $_SESSION['filtersPhone'] = $filters;

            $listProducts[] = $product;

            foreach ($categories as $category) {
                if ($category->name == "Phones") {
                    $category->filters = $filters;
                    $category->listProducts = $listProducts;
                }
            }
        }

    } elseif ($product->getDescription() == "Monitor") {

        if (isset($_SESSION['filtersMonitor'])) {
            $filters = $_SESSION['filtersMonitor'];
        }

        $count = 0;
        foreach ($categories as $category) {
            if ($category->name == "Monitors") {
                $count += 1;
            }
        }

        if ($count == 0) {
            unset($listProducts);
            unset($filters);

            $filters['price'] = $product->price;
            $filters['diagonal'] = $product->diagonal;
            $filters['frequency'] = $product->frequency;

            $filters['price-min'] = $filters['price'];
            $filters['price-max'] = $filters['price'];
            $filters['diagonal-min'] = $filters['diagonal'];
            $filters['diagonal-max'] = $filters['diagonal'];
            $filters['frequency-min'] = $filters['frequency'];
            $filters['frequency-max'] = $filters['frequency'];

            $_SESSION['filtersMonitor'] = $filters;

            $listProducts[] = $product;

            $categories[] = new MonitorCategory('Monitors', $filters, $listProducts);

        } else {

            if ($product->price < $filters['price-min']) {
                $filters['price-min'] = $product->price;
            }
            if ($product->price > $filters['price-max']) {
                $filters['price-max'] = $product->price;
            }
            if ($product->diagonal < $filters['diagonal-min']) {
                $filters['diagonal-min'] = $product->diagonal;
            }
            if ($product->diagonal > $filters['diagonal-max']) {
                $filters['diagonal-max'] = $product->diagonal;
            }
            if ($product->frequency < $filters['frequency-min']) {
                $filters['frequency-min'] = $product->frequency;
            }
            if ($product->frequency > $filters['frequency-max']) {
                $filters['frequency-max'] = $product->frequency;
            }

            $_SESSION['filtersMonitor'] = $filters;

            $listProducts[] = $product;

            foreach ($categories as $category) {
                if ($category->name == "Monitors") {
                    $category->filters = $filters;
                    $category->listProducts = $listProducts;
                }
            }
        }
    }
    $_SESSION['category'] = $categories;
}

unset($_SESSION['category']);

// 5. B файле index.php вывести список категорий, по клику на категорию открываются доступные 
// фильтры, к ним добавляются текстовые поля, в которых в placeholder добавляются min и max значения, 
// которые могут быть туда вписаны (значение берется из списка продуктов).

// 6. При изменении фильтра, кнопка Submit становится активной. По клику на кнопку показывать только те
// продукты, которые подходят по фильтру.

echo '<form action="" method="POST"><ul>';
foreach ($categories as $category) {

    if (isset($_POST[$category->name])) {
        echo '<li><button name="' . $category->name . '" class="category red"><h1>' . $category->name . '</h1></button></li>';
    } else {
        echo '<li><button name="' . $category->name . '" class="category"><h1>' . $category->name . '</h1></button></li>';
    }
}
echo '</ul></form>';

foreach ($categories as $category) {
    if (isset($_POST[$category->name])) {
        unset($category->filters['price'], $category->filters['ram'], $category->filters['countSim'], $category->filters['hdd'],
            $category->filters['os'], $category->filters['frequency'], $category->filters['diagonal']);
        if ($category->name == 'Phones') {
            ?>
            <form action=""  style="display: flex;">

                <span>Price <input type="text" name="price" id="price" onkeydown="ShowPhoneButton();"
                        placeholder="min: <?= $category->filters['price-min'] ?> max: <?= $category->filters['price-max'] ?> ">
                </span>
                <span>RAM <input type="text" name="ram" id="ram" onkeydown="ShowPhoneButton();"
                        placeholder="min: <?= $category->filters['ram-min'] ?> max: <?= $category->filters['ram-max'] ?> "></span>
                <span>SIMs <input type="text" name="sim" id="sim" onkeydown="ShowPhoneButton();"
                        placeholder="min: <?= $category->filters['countSim-min'] ?> max: <?= $category->filters['countSim-max'] ?> "></span>
                <span>HDD <input type="text" name="hdd" id="hdd" onkeydown="ShowPhoneButton();"
                        placeholder="min: <?= $category->filters['hdd-min'] ?> max: <?= $category->filters['hdd-max'] ?> "></span>
                <button type="submit" name="apply" id="apply" style="display:none; margin-left: 10px;">Apply</button>

            </form>

            <?php

            if (isset($_GET['apply']) && (isset($_GET['price']) || isset($_GET['ram']) || isset($_GET['sim']) || isset($_GET['hdd']))) {

                foreach ($category->listProducts as $product) {
                    if (
                        (isset($_GET['price']) && $product->price < $_REQUEST['price'])
                        || (isset($_GET['ram']) && $product->ram < $_REQUEST['ram'])
                        || (isset($_GET['sim']) && $product->countSim < $_REQUEST['sim'])
                        || (isset($_GET['hdd']) && $product->hdd < $_REQUEST['hdd'])
                    ) {
                        echo '';
                    } else {
                        echo $product->getProduct();
                    }
                }

            } else {
                foreach ($category->listProducts as $product) {
                    echo $product->getProduct();
                }
            }

        } elseif ($category->name == 'Monitors') {
            ?>
            <form action="" style="display: flex;">
                <span>Price <input type="text" name="price" id="price" onkeydown="ShowMonitorButton();"
                        placeholder="min: <?= $category->filters['price-min'] ?> max: <?= $category->filters['price-max'] ?> ">
                </span>
                <span>Diagonal <input type="text" name="diagonal" id="diagonal" onkeydown="ShowMonitorButton();"
                        placeholder="min: <?= $category->filters['diagonal-min'] ?> max: <?= $category->filters['diagonal-max'] ?> ">
                </span>
                <span>Frequency <input type="text" name="frequency" id="frequency" onkeydown="ShowMonitorButton();"
                        placeholder="min: <?= $category->filters['frequency-min'] ?> max: <?= $category->filters['frequency-max'] ?> ">
                </span>
                <button type="submit" name="apply" id="apply" style="display:none; margin-left: 10px;">Apply</button>
            </form>

            <?php

            if (isset($_GET['price']) || isset($_GET['diagonal']) || isset($_GET['frequency'])) {

                foreach ($category->listProducts as $product) {
                    if (
                        (isset($_GET['price']) && $product->price < $_REQUEST['price'])
                        || (isset($_GET['diagonal']) && $product->diagonal < $_REQUEST['diagonal'])
                        || (isset($_GET['frequency']) && $product->frequency < $_REQUEST['frequency'])
                    ) {
                        echo '';
                    } else {
                        echo $product->getProduct();
                    }
                }

            } else {
                foreach ($category->listProducts as $product) {
                    echo $product->getProduct();
                }
            }
        }
    }
}

?>

<script>
    function ShowMonitorButton() {
        if (document.getElementById('price').value == '' && document.getElementById('diagonal').value == '' && document.getElementById('frequency').value == '') {
             document.getElementById('apply').style.display = 'none'; 
            }
        else { 
            document.getElementById('apply').style.display = 'block'; 
        }
    }

    function ShowPhoneButton() {
        if (document.getElementById('price').value == '' && document.getElementById('ram').value == '' && document.getElementById('sim').value == '' && document.getElementById('hdd').value  == '') {
             document.getElementById('apply').style.display = 'none'; 
            }
        else { 
            document.getElementById('apply').style.display = 'block'; 
        }
    }
</script>