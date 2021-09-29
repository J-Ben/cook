<?= $this->include("/recette/templates/header") ?>

<body>

<div class="container">
  <h2>RECETTE Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>libelle</th>
        <th>origine</th>
        <th>année</th>
      </tr>
    </thead>
    <tbody> 
      <?php foreach($recettes as $recette) : ?>
      <tr>
        <td><?=$recette->id; ?></td>
        <td><?=$recette->libelle_recette; ?></td>
        <td><?=$recette->origine_recette; ?></td>
        <td><?=$recette->annee_recette; ?></td>
      </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>

</body>

<?= $this->include("/recette/templates/footer") ?>