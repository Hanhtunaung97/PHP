<?php require_once("./template/header.php") ?>
<?php require_once("./template/sidebar.php") ?>
<section class=" bg-gray-100 p-10 rounded-lg">
    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./batch-list.php">
                Batch List
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400  dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Edit Batch
        </li>
    </ol>
    <hr class="  border-gray-300 my-4">
    <?php
    $id = $_GET["row_id"];
    $sql = "SELECT * FROM batches WHERE id=$id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    ?>
    <form action="./batch-update.php" method="post" class="mb-5">
        <div class="flex gap-3 flex-col justify-center w-1/2 mx-auto">
            <div>
                <input type="hidden" name="row_id" id="row_id" value="<?= $row['id'] ?>" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">

            </div>
            <div>
                <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Batch Name</label>
                <input type="text" value="<?= $row['name'] ?>" name="name" id="name" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Batch Name">

            </div>
            <div>
                <label for="course" class="block text-sm font-medium mb-2 dark:text-white">Select Course</label>
                <select name="course_id" id="course" class="py-3 px-4 pe-9 block w-full bg-white border-gray-200 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
                    <!-- <option selected="">Select Course</option> -->
                    <?php
                    $sql = "SELECT * FROM courses";
                    $query = mysqli_query($con, $sql);
                    while ($course = mysqli_fetch_assoc($query)):
                    ?>
                        <option value="<?= $course['id'] ?>" <?= $course['id'] == $row["course_id"] ? "selected" : ""  ?>><?= $course['title'] ?></option>
                    <?php endwhile;  ?>

                </select>
            </div>
            <div>
                <label for="start_date" class="block text-sm font-medium mb-2 dark:text-white">Start Date</label>
                <input type="date" value="<?= $row['start_date'] ?>" name="start_date" id="start_date" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            </div>
            <div class="flex items-center gap-3">
                <div class="w-full">
                    <label for="start_time" class="block text-sm font-medium mb-2 dark:text-white">Start Time</label>
                    <input type="time" value="<?= $row['start_time'] ?>" name="start_time" id="start_time" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
                <div class="w-full">
                    <label for="end_time" class="block text-sm font-medium mb-2 dark:text-white">End Time</label>
                    <input type="time" value="<?= $row['end_time'] ?>" name="end_time" id="end_time" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
            </div>
            <div>
                <label for="student_limit" class="block text-sm font-medium mb-2 dark:text-white">Student Limit</label>
                <input type="number" value="<?= $row['student_limit'] ?>" name="student_limit" id="student_limit" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            </div>
            <div class="py-3">
                <div class="flex">
                    <input type="checkbox" value="<?= $row['is_register_open'] ?>" name="is_register_open" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-checked-checkbox" value="1" <?= $row['is_register_open'] == 1 ? "checked" : "" ?>>
                    <label for="hs-checked-checkbox" class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Register Open</label>
                </div>
            </div>
            <button type="submit" class=" w-auto  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Update Batch</button>
        </div>

        </div>
    </form>
</section>
<?php require_once("./template/footer.php") ?>