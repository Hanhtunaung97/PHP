<?php require_once("./template/header.php") ?>
<?php require_once("./template/sidebar.php") ?>
<?php
$sql = "SELECT *,students.id as student_id FROM students LEFT JOIN nationality ON nationality.id=students.nationality_id LEFT JOIN gender ON gender.id=students.gender_id ORDER BY student_id DESC";
$countSql = "SELECT COUNT(id) as student_total FROM students";
if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $sql .= " WHERE name LIKE '%$q%'";
    $countSql .= " WHERE name LIKE '%$q%'";
}
if (isset($_GET['sort_by']) && isset($_GET['order'])) {
    $sortBy = $_GET['sort_by'];
    $order = $_GET['order'];
    $sql .= " ORDER BY $sortBy $order";
}
// die($sql);
$countQuery = mysqli_query($con, $countSql);
$countRow = mysqli_fetch_assoc($countQuery);
$totalRecord = $countRow["student_total"];
$recordPerPage = 5;
$totalPage = ceil($totalRecord / $recordPerPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($currentPage - 1) * $recordPerPage;
$sql .= " LIMIT $offset,$recordPerPage";
$query = mysqli_query($con, $sql);

?>
<section class=" bg-gray-100 p-10 rounded-lg">
    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Manage Students
        </li>
    </ol>
    <hr class=" border-gray-300 my-4">
    <div class="flex justify-between items-center mb-3">
        <a href="./student-create.php" class=" w-auto  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Create Student</a>
        <form action="student-list.php" method="get">
            <div>
                <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                <div class="flex rounded-lg shadow-sm">
                    <input required type="text" name="q" value="<?= isset($_GET["q"]) ? $_GET["q"] : "" ?>" id="hs-trailing-button-add-on-with-icon" name="hs-trailing-button-add-on-with-icon" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    <button type="submit" class="w-[2.875rem] h-[2.875rem] flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="flex items-center justify-end gap-2 mb-3">
        <p>Showing Result Count : <?= $totalRecord ?></p>
        <?php if (isset($_GET["q"])): ?>
            : Search by '<?= $_GET["q"] ?>'
            <a href="student-list.php" class=" bg-red-100 px-2 py-1 rounded-full text-xs flex gap-2 text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                Clear Search
            </a>
        <?php endif; ?>
        <?php if (isset($_GET["sort_by"])): ?>
            : Sort by '<?= $_GET["sort_by"] ?>' : <?= $_GET["order"] == "asc" ? "Ascending" : "Descending" ?>
            <a href="student-list.php" class=" bg-red-100 px-2 py-1 rounded-full text-xs flex gap-2 text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                Remove Sorting
            </a>
        <?php endif; ?>
    </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">id</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    <div class=" flex items-center gap-3">
                                        Student Information
                                        <div class=" flex flex-col">
                                            <a href="./student-list.php?sort_by=name&order=asc" class=" hover:bg-gray-300 p-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                </svg>

                                            </a>
                                            <a href="./student-list.php?sort_by=name&order=desc" class=" hover:bg-gray-300 p-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500 text-end">DOB</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Pocket Money</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">create_at</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">updated_at</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <?php if ($query->num_rows == 0):  ?>
                                <tr>
                                    <td colspan="7" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center">There is not student.</td>
                                </tr>
                            <?php endif; ?>

                            <?php

                            while ($row = mysqli_fetch_assoc($query)):
                            ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $row["student_id"] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        <div class="flex justify-start flex-col gap-2">
                                            <span><?= $row["name"] ?></span>
                                            <div class=" gap-1 items-center  text-white text-xs inline-flex">
                                                <span class="bg-gray-500 px-2 py-1 text-center  rounded-xl"><?= $row["type"] ?></span>
                                                <span class="bg-gray-500 px-2 py-1 text-center  rounded-xl"><?= $row["nation"] ?></span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-end"><?= $row["date_of_birth"] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-end"><?= $row["pocket_money"] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-end"><?= date("Y-m-d", strtotime($row["created_at"])) ?>
                                        <br>
                                        <?= date(" H:i", strtotime($row["created_at"])) ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-end"><?= date("Y-m-d", strtotime($row["updated_at"])) ?>
                                        <br>
                                        <?= date(" H:i", strtotime($row["updated_at"])) ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-end">
                                        <div class="inline-flex rounded-lg shadow-sm justify-end">
                                            <a href="./student-edit.php?row_id=<?= $row["student_id"] ?>" class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                </svg>
                                            </a> <a onclick="return confirm('are u sure to delete?')" href="./student-delete.php?row_id=<?= $row["student_id"] ?>" class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 stroke-red-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>
                                            </a>

                                            <a class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="./enroll-create.php?row_id=<?= $row['student_id'] ?>">

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-green-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <?php
    $start = $currentPage > 3 ? $currentPage - 3 : 1;
    $end = $currentPage + 3 <= $totalPage ? $currentPage + 3 : $totalPage;

    ?>
    <nav class="flex items-center gap-x-1" aria-label="Pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="./student-list.php?page=<?= $currentPage - 1 ?> <?= isset($_GET['q']) ? "&q=" . $_GET['q'] : "" ?>" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Previous">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </a>
        <?php endif;  ?>
        <div class="flex items-center gap-x-1">
            <?php for ($i = $start; $i <= $end; $i++): ?>
                <a
                    href="./student-list.php?page=<?= $i ?> <?= isset($_GET['q']) ? "&q=" . $_GET['q'] : "" ?>"
                    class="<?= $i == $currentPage ? "bg-white border border-gray-200" : "" ?> min-h-[38px] min-w-[38px] flex justify-center items-center  text-gray-800 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:focus:bg-white/10" aria-current="page"> <?= $i ?>
                </a>
            <?php endfor; ?>

        </div>
        <?php if ($currentPage + 1 < $totalPage): ?>
            <a
                href="./student-list.php?page=<?= $currentPage + 1 ?> <?= isset($_GET['q']) ? "&q=" . $_GET['q'] : "" ?>"
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Next">
                <span class="sr-only">Next</span>
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        <?php endif; ?>
    </nav>
    <!-- End Pagination -->


</section>
<?php require_once("./template/footer.php") ?>