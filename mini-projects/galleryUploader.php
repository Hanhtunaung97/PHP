<?php require_once("./template/header.php") ?>
<?php require_once("./template/sidebar.php") ?>
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

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Gallery Uploader
        </li>
    </ol>
    <hr class="  border-gray-300 my-4">
    <form action="./gallery.php" method="post" enctype="multipart/form-data">
        <div>
            <div class="mb-5">
                <label for="upload" class="sr-only">Choose file</label>
                <input type="file" name="upload[]" id="upload" multiple class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
         file:bg-gray-50 file:border-0
                file:me-4
                file:py-3 file:px-4
              dark:file:bg-neutral-700 dark:file:text-neutral-400">
            </div>
            <button type="submit" name="calc_btn" class=" w-full  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Upload
            </button>
        </div>
    </form>
</section>
<?php
$photos = array_filter(scandir("photos"), fn($el) => $el != "." && $el != "..")
?>
<div class="mt-10 grid grid-cols-3 gap-3">
    <?php foreach ($photos as $photo): ?>
        <div class=" relative group">
            <img src="photos/<?= $photo ?>" alt="" class=" rounded-lg w-44 h-44 object-cover object-center">
            <a onclick="return confirm('Are you sure?')" href="./galleryPhotoDelete.php?file_name=<?= $photo ?>" class=" transition-all duration-200 absolute pointer-events-none hidden bottom-1 left-1 py-3 px-4  group-hover:inline-flex group-hover:pointer-events-auto items-center gap-x-2 text-sm font-medium rounded-lg border border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 focus:outline-none focus:border-red-400 focus:text-red-400 disabled:opacity-50 disabled:pointer-events-none">
                Delete
            </a>
        </div>
    <?php endforeach; ?>

</div>
<?php require_once("./template/footer.php") ?>