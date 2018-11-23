<?= require __DIR__ .'/layouts/header.php'?>

            <div class="row">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>

            <div class="row">
<?php foreach ($infoQuizzes as $infoQuiz) :?>
                <div class="col-sm-4">
                    <h3 class="text-blue"><a href="<?= route('quiz', ['id' => $infoQuiz->id])?>"><?= $infoQuiz->title ?></a></h3>
                    <h5><?= $infoQuiz->description ?></h5>
                    <p><?= $authorNames[$infoQuiz->app_users_id] ?></p>
                </div>
<?php endforeach ?>
            </div>
        </main>
    </body>
</html>
<?= require __DIR__ .'/layouts/footer.php'?>