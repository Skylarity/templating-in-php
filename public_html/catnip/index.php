<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Templating Using PHP";

/*load head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>

    <body class="sfooter">
        <div class="sfooter-content">

            <!--begin header and navbar-->
            <?php require_once(dirname(__DIR__) . "/php/partials/header.php");?>

            <!--begin main page content-->
            <main>
                <div class="container">

                    <!--begin welcome row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <h1>Meow! =^. .^=</h1>
                                <p>CAAAAATNIIIIIIIIP!</p>
                                <small>(An accurate representation of Arlo when there's catnip nearby)</small>
                            </div>
                        </div>
                    </div>

                    <!--begin 3 column row-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-box">
                                <h3>Templating is fun!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ab magnam, ea. Labore, architecto deserunt sed, incidunt explicabo eos rerum. In similique fuga ipsum ex, repellat, inventore expedita ea, iusto consequatur explicabo, provident ab. Temporibus, aut aliquam distinctio, eum suscipit sequi commodi molestias assumenda nobis? Ducimus velit, minus quibusdam reiciendis tempore corrupti in at perspiciatis minima, cumque maxime repellat cum soluta maiores quae sint non harum. Quas quisquam recusandae qui error libero accusamus ipsum consequatur, alias amet eaque repellat. Aspernatur facilis culpa, dolore nesciunt velit accusantium, ipsa dignissimos minima quod delectus ducimus laboriosam doloribus ex libero autem sit dolores vel sequi consequatur. Dignissimos sunt, excepturi, libero soluta inventore omnis at? Inventore temporibus ducimus voluptatibus accusantium, laboriosam. Eos, fuga nihil dolore ab, dolorem laudantium laborum voluptates ad vero dolor minus sed quisquam quam ipsa quaerat, repudiandae fugit doloremque unde deleniti. Explicabo sit, ut aperiam dolorum incidunt voluptates voluptatem et reiciendis numquam.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-box">
                                <h3>Catnip here!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ab, pariatur odit labore. Labore sequi, itaque praesentium eaque aspernatur cupiditate dicta suscipit deleniti dolorum similique nobis, repudiandae fugit sunt, ipsum expedita. Aliquam, iure obcaecati voluptate quibusdam labore vitae, similique commodi aliquid perspiciatis provident aspernatur optio maxime magni reiciendis, inventore perferendis. Nostrum, et natus sunt modi quam commodi inventore! Maiores facere harum blanditiis, consectetur rerum iste libero possimus, eos quis necessitatibus provident praesentium! Eos, saepe delectus optio laudantium cumque, quos at? Aliquid, officiis, earum. Ipsum nihil aut quae repudiandae repellat laborum ex esse soluta quos facilis, ad alias, laboriosam est dolorem, illo, distinctio magni. Recusandae, praesentium harum odio assumenda maiores maxime delectus nemo, esse vel quam reprehenderit voluptates, molestias autem enim, modi doloribus exercitationem expedita quo. Molestias labore officiis voluptatibus porro quas rem quo illo excepturi iure beatae dolore esse saepe necessitatibus ducimus incidunt numquam, illum cum quasi. Reprehenderit, nulla, rerum.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-box">
                                <h3>Catnip over there!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, aspernatur, similique a ad quos velit mollitia consequuntur explicabo obcaecati inventore quam tempore, est numquam cupiditate sed officia quia consectetur repudiandae voluptatibus! Deleniti dicta magnam molestias, architecto, quam tempora quasi totam libero, quis quo aspernatur iure illum minima aut rerum, quod eius nemo nam quidem hic? Error rerum, at, alias nostrum obcaecati id quas mollitia tempora accusantium consequuntur suscipit, iste autem incidunt. Excepturi nam aliquid repudiandae sint quasi, dolorum modi libero accusamus veritatis! Autem doloribus consequatur tempora accusamus odit eaque provident, a repellat nobis adipisci dolorem et mollitia magni exercitationem alias, reprehenderit deleniti consequuntur tenetur, commodi aut doloremque voluptatem maiores quo maxime! Ex vitae, molestias quibusdam sequi. Sint iusto illo atque beatae voluptate harum magni ullam. Non odio neque facere quae et soluta quis enim labore consequatur, nulla rem nesciunt rerum. Commodi nemo, ullam iure sapiente dolorum nihil iusto non, quasi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div><!--.sfooter-content-->

        <!--begin footer content-->
        <?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>
    </body>
</html>
