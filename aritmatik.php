<form action="aritmatik.php" method="GET">
    <input type="number" name="bil1"
    <?php
        if(isset($_GET['bil1']))
            echo 'value="'.$_GET['bil1'].'"';
    ?>
    />
    <select name="opr">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="x">*</option>
    </select>
    <input type="number" name="bil2"
    <?php
        if(isset($_GET['bil1']))
            echo 'value="'.$_GET['bil1'].'"';
    ?>
    />
    <input type="submit" value="=" name="sub" />
    <?php
        if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])){
            switch($_GET['opr']){
                case '+': $hsl = $_GET['bil1'] + $_GET['bil2']; break;
                case '-': $hsl = $_GET['bil1'] - $_GET['bil2']; break;
                case '/': $hsl = $_GET['bil1'] / $_GET['bil2']; break;
                case 'x': $hsl = $_GET['bil1'] * $_GET['bil2']; break;
            }
            echo $hsl;
            $logkita = $_GET['history']. $_GET['bil1']." ". $_GET['opr']." ". $_GET['bil2']." = ". $hsl. "<br />";
        }    
    ?>
    <input type="hidden" name="history" 
    <?php
        if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
            echo 'value="'.$logkita.'"'; #untuk 
        else
            echo 'value=""';
    ?>
    />
    <h2>Low Perhitungan Sebelumnya:</h2>
    <?php
        if(isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2']))
            echo $logkita;
    ?>
</form>