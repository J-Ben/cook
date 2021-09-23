<?= $this->include("/ingredient/templates/header") ?>
<body>

<div class="container">
  <h2>INGREDIENTS Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>type</th>
        <th>quantité</th>
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


<?= $this->include("/ingredient/templates/footer") ?>