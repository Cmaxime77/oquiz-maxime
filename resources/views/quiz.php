<?php require __DIR__ . '/layouts/header.php' ?>

<div class="row">
    <h2> Le chocolat - I
        <span class="badge badge-pill badge-secondary"><?= count($questions) ?> questions</span>
    </h2>
</div>
<div class="row">
    <h4>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
    </h4>
</div>

<div class="row">
    <p>by <?= $author->firstname  ?> <?= $author->lastname  ?></p>
</div>

<div class="row">

</div>
<div class="row mt-3">

<?php foreach($questions as $question) : ?>

    <div class="col-sm-3 border p-0 mb-5 mr-5">

        <span class="badge badge-success float-right mt-2 mr-2"><?= $question->levels_id ?></span>

        <div class="p-3 background-grey">
           <?= $question->question ?>
        </div>
        <div class="p-3 question-answer-block">
            <ul>
                <?php foreach($answersList[$question->id] as $answer): ?>
                <li><?= $answer->description?> </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php endforeach; ?>

</div>
<?php require __DIR__ . '/layouts/footer.php' ?>