<?= $this->include("/recette/templates/header") ?>

<body>

<div class="container">
  <h2>INGREDIENTS Table</h2>
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
      <tr>
        <td>ID</td>
        <td>LIEBELLE</td>
        <td>ORIGINE</td>
        <td>ANNEE</td>
      </tr>
    </tbody>
  </table>
</div>

</body>

<?= $this->include("/recette/templates/footer") ?>