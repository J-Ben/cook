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
      <?php foreach($data as$row) : ?>
      <tr>
        <td><?=$row['id'] ?></td>
        <td><?=$row['libelle_recette'] ?></td>
        <td><?=$row['origine_recette'] ?></td>
        <td><?=$row['annee_recette'] ?></td>
      </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>

</body>

<?= $this->include("/recette/templates/footer") ?>