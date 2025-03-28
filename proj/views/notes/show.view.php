<?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/nav.php') ?>
 <?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p><?= htmlspecialchars($note['body'])?></p>
            <a href="/notes" class="text-blue-500 underline pt-8" > Go Back</a>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>