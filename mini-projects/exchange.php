<?php require_once("./template/header.php") ?>
<?php require_once("./template/sidebar.php") ?>
<?php
echo "<pre>";
// print_r($_POST);
$amount = $_POST["amount"];
$from_currency_arr = explode("-", $_POST["from_currency"]);
$from_currency_name = $from_currency_arr[0];
$from_currency_rate = str_replace(",", "", $from_currency_arr[1]);

$to_currency_arr = explode("-", $_POST["to_currency"]);
$to_currency_name = $to_currency_arr[0];
$to_currency_rate = str_replace(",", "", $to_currency_arr[1]);
$mmk = $amount * $from_currency_rate;
$to_amount = $mmk / $to_currency_rate;

$fileName = "exchangeRecord.txt";
if (!file_exists($fileName)) {
    touch($fileName);
}
$fileStream = fopen($fileName, "a+");
fwrite($fileStream, "\n$from_currency_name to $to_currency_name with $amount amount =$to_amount    $to_currency_name");
fclose($fileStream);
?>
<section class=" bg-gray-100 p-10 rounded-lg">
    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400  dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./exchangeCalculator.php">
                Exchange Calculator
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400  dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Calculate Result
        </li>
    </ol>
    <hr class="  border-gray-300 my-4">
    <p class="text-3xl font-bold mb-10">The exchanged amount is <?php echo round($to_amount, 2)  ?> <?= $to_currency_name ?> </p>
    <div class="flex items-center justify-center gap-3">
        <a href="./exchangeCalculator.php" name="calc_btn" class=" text-center w-full  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Calculate Again
        </a>
        <a href="./exchangeRecord.php" name="calc_btn" class=" w-full  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-blue-600 bg-gray-100 text-blue-600 hover:bg-blue-600 hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Record List
        </a>
    </div>

</section>
<?php require_once("./template/footer.php") ?>