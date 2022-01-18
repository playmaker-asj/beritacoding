<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php')?>
</head>

<body>
    <main class="main"
    <?php $this->load->view('admin/_partials/side_nav.php')?>

    <div class="content">
        <h1>List Artikel</h1>

        <div class="toolbar">
            <a href="<?=site_url('admin/post/new')?>" class="button button-primary" role="button">+ Tulis Artikel</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th style="width: 15%;" class="text-center">Status</th>
                    <th style="width: 25%;" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($articles as $article): ?>
                    <td>
                        <div><?= $article->title ?></div>
                        <div class="text-gray"><small><?= $article->created_at?><small></div>
                        
                    </td>
                        <?php if($article->draft === 'true'): ?>
                        <td class="text-center text-gray">Draft</td>
                    <?php else: ?>
                        <td class="text-center text-green">Published</td>
                    <?php endif ?>  
                    <td>
                        <div class="action">
                            <div class="action">
                                <a href="<?= site_url('article/'.$article->slug)?>" class="button button-small" target="_blank" role="button">Preview</a>
                                <a href="<?= site_url('admin/post/edit/'.$article->id) ?>" class="button button-small" role="button">Edit</a>
                                <a href="#"
                                    data-delete-url="<?= site_url('article/'.$article->id)?>"
                                    class="button button-small button-danger"
                                    role="button"
                                    onclick="deleteConfirm(this)">Delete</a>
                            </div>
                    </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
</body>