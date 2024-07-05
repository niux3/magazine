<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>

    <div class="container">
        <h1>Kit front</h1>
        <?php for($i = 1; $i <= 6; $i++): ?>
        <h<?= $i ?>>Heading <?= $i ?></h<?= $i ?>>
        <?php endfor; ?>
        <p>Lorem ipsum <span class="strike">dolor</span> sit amet, consectetur <mark>adipisicing</mark> elit. Optio dicta <strong>vitae voluptate</strong>, quo voluptas, <em>minima vel</em> numquam dolores blanditiis delectus reiciendis facere amet recusandae quaerat! Laboriosam excepturi molestias, ex incidunt?</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing</a> elit. Quam voluptas tempore, quas reprehenderit tempora ut qui corrupti minus fugit possimus necessitatibus quaerat quisquam delectus velit pariatur. Reprehenderit quo, recusandae vero.</p>
        <ul>
            <li>Item 1</li>
            <li>
                Item 2
                <ul>
                    <li>Item 2.1</li>
                    <li>Item 2.2</li>
                </ul>
            </li>
            <li>Item 3</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit deleniti rerum maxime officiis nemo, ab ratione enim blanditiis tempora nulla esse cupiditate accusantium ut commodi quaerat, cum, dignissimos dolorem illum! ipsum dolor sit amet, consectetur adipisicing elit. Fugit consequatur quod error enim quidem delectus porro, blanditiis harum ea magni officiis nobis eligendi doloribus natus voluptate, eveniet facilis nostrum neque!</p>
        <hr>
        <ul>
            <li>Item 1</li>
            <li>
                Item 2
                <ul>
                    <li>Item 2.1</li>
                    <li>Item 2.2</li>
                </ul>
            </li>
            <li>Item 3</li>
        </ul>
        <ol>
            <li>Item 1</li>
            <li>
                Item 2
                <ul>
                    <li>Item 2.1</li>
                    <li>Item 2.2</li>
                </ul>
            </li>
            <li>Item 3</li>
        </ol>
        <table class="u-full-width">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denis Durand</td>
                    <td>26</td>
                    <td>Male</td>
                    <td>Nice</td>
                </tr>
                <tr>
                    <td>Bertrand Dupont</td>
                    <td>42</td>
                    <td>Male</td>
                    <td>Toulouse</td>
                </tr>
            </tbody>
        </table>
        <h2>grid system</h2>
        <?php
            $listBlock = [
                "one",
                "two",
                "three",
                "four",
                "five",
                "six",
                "seven",
                "eight",
                "nine",
                "ten",
                "eleven",
                "twelve",
            ];
            $nb = count($listBlock);
            $style = "border-radius:.4rem; text-align:center; background:#eee; color:#222; padding: 1.5rem 1rem;"
        ?>
        <?php for($i = 0; $i < $nb; $i++): ?>
            <?php if(isset($listBlock[$nb - $i - 2])): ?>
            <div class="grid has-gutter" style="margin:0 0 2.5rem">
                <div class="col-<?= $i + 1 ?>" style="<?= $style ?>"><?= $listBlock[$i] ?></div>
                <div class="col-<?= $nb - ($i) ?>" style="<?= $style ?>"><?= $listBlock[$nb - $i - 2] ?></div>
            </div>
            <?php endif; ?>
        <?php endfor; ?>
        <hr>
        <h2>colors</h2>
        <?php
            $colors = [
                'primary',
                'secondary',
                'success',
                'info',
                'warning',
                'danger',
            ]
        ?>
        <div class="grid-<?= count($colors) + 1 ?> has-gutter">
            <?php foreach ($colors as $v): ?>
            <div class="<?= $v ?> col-3"><?= $v ?></div>
            <?php endforeach; ?>
        </div>
        <hr>
        <h2>citations</h2>
        <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, ipsum reiciendis impedit temporibus iure fuga illum molestiae facere odit quia eos cupiditate recusandae repellat voluptatibus alias! Fugit sit voluptas, quisquam!
        </blockquote>
        <hr>
        <h2>boutons</h2>
        <button>envoyer</button>
        <button type="submit">envoyer</button>
        <button type="reset">envoyer</button>
        <input type="button" value="envoyer">
        <input type="submit" value="envoyer">
        <input type="reset" value="envoyer">
        <a href="#" class="button">envoyer</a>
            <?php foreach ($colors as $v): ?>
        <div style="margin:2.5rem 0">
            <button class="<?= $v ?>">envoyer</button>
            <button type="submit" class="<?= $v ?>">envoyer</button>
            <button type="reset" class="<?= $v ?>">envoyer</button>
            <input type="button" class="<?= $v ?>" value="envoyer">
            <input type="submit" class="<?= $v ?>" value="envoyer">
            <input type="reset" class="<?= $v ?>" value="envoyer">
            <a href="#" class="button <?= $v ?>">envoyer</a>
        </div>
            <?php endforeach; ?>
        <hr>
        <h2>input</h2>
        <div>
            <textarea placeholder="placeholder text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.
            </textarea>
            <textarea placeholder="placeholder text" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sint repudiandae, libero voluptates aliquam laborum, omnis voluptatem cum ab minus, praesentium corporis rem quos natus eveniet? Odio sapiente quam excepturi.</textarea>
            <input type="text" disabled value="une valeur">
            <input type="text" placeholder="placeholder text">
            <input type="search" placeholder="placeholder text">
            <input type="email" placeholder="placeholder text">
            <input type="number" placeholder="placeholder text">
            <input type="password" placeholder="placeholder text">
            <input type="radio" name="field">
            <input type="radio" name="field">
            <input type="checkbox">
        </div>
        <?php foreach (['error', 'success'] as $v):?>
        <div>
            <textarea class="<?= $v ?>" placeholder="placeholder text"></textarea>
            <input type="text" class="<?= $v ?>">
            <input type="search" class="<?= $v ?>">
            <input type="email" class="<?= $v ?>">
            <input type="number" class="<?= $v ?>">
            <input type="password" class="<?= $v ?>">
            <input type="radio" class="<?= $v ?>">
        </div>
        <?php endforeach;?>
        <hr>
        <h2>formulaire</h2>
        <form action="">
            <fieldset>
                <legend>une liste de champs</legend>
                <div class="grid-2 has-gutter">
                    <div class="input text">
                        <label for="firstname">prénom</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="input text">
                        <label for="lastname">nom</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                </div>
                <div class="grid has-gutter">
                    <div class="input text col-3">
                        <label for="zipcode">code postal</label>
                        <input type="text" name="zipcode" id="zipcode">
                    </div>
                    <div class="input text col-9">
                        <label for="city">ville</label>
                        <input type="text" name="city" id="city">
                    </div>
                </div>
                <div class="input select">
                    <label for="subject">sujet</label>
                    <select name="subject" id="subject" disabled>
                        <option value="">choisir un sujet</option>
                        <option value="">quelque chose</option>
                        <option value="">une chose</option>
                        <option value="">quelque chose autre</option>
                    </select>
                </div>
                <div class="input textarea">
                    <label for="message">message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
            </fieldset>
            <div class="input submit">
                <button type="submit" class="primary">envoyer</button>
            </div>
        </form>
    </div>
    <script async defer src="./public/js/app.js"></script>
    <script src="http://localhost:9000/livereload.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXXXXX-X', 'XXXXXXXXXXX.TLD');
        ga('send', 'pageview');
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
