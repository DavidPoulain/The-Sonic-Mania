<body>
    <main>
        <section>
            <p>body</p>
            <table class = "tableau">
               <thead>
                   <tr>
                       <th class ="tableau_header" colspan="4">Les personnages de Sonic</th>
                   </tr>
               </thead> 
                <?php foreach ($viewData['characters'] as $oneCharacter) : ?>
                <tr class="tableau_row">
                   <td class="tableau_cell--img"><img src="<?= $absoluteUrl . '/assets/images/' . $oneCharacter->getPicture(); ?>" alt="character picture"></td>
                <!-- </tr>
                <tr> -->
                   <td class="tableau_cell--name"><?= $oneCharacter->getName() ?></td>
                <!-- </tr>
                <tr> -->
                   <td class="tableau_cell"><?= $oneCharacter->getDescription() ?></td>
                <!-- </tr>
                <tr> -->
                   <td class="tableau_cell">type</td>
                </tr>
                <?php endforeach ; ?>
            </table>
        </section>
    </main>
    
