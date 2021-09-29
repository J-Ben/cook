<?= $this->include("/recette/templates/header") ?>

<body>

<div class="container">
  <h2>Recette by id Table</h2>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">
  </div>   
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
        <td><?=$recettes->id; ?></td>
        <td><?=$recettes->libelle_recette; ?></td>
        <td><?=$recettes->origine_recette; ?></td>
        <td><?=$recettes->annee_recette; ?></td>
      </tr> 

    </tbody>
  </table>
</div>

</body>

<?= $this->include("/recette/templates/footer") ?>