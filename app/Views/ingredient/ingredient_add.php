<?= $this->include("/ingredient/templates/header") ?>

<div class="container">
  <h2>Nouvel ingredient</h2>
  <p>Formulaire d'<code>ajout</code> d'ingredient.</p>
  
  <form action="" class="needs-validation" novalidate>
      <div class="form-group">
      <label for="sel1">Recette de votre choix :</label>
      <select class="form-control" id="id_recette" name="id_recette">
        <option>Cassoulet</option>
        <option>Tortilla</option>
        <option>Maffé</option>
        <option>Alloco</option>
      </select>
      </div>
    <div class="form-group">
      <label for="nom_ingredient">Nom :</label>
      <input type="text" class="form-control" id="nom_ingredient" placeholder="Entrez le nom de l'ingrédient" name="nom_ingredient" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div>
    <div class="form-group">
      <label for="type_ingredient">Type :</label>
      <input type="text" class="form-control" id="type_ingredient" placeholder="Ex (poudre, liquide, écrasé, etc)" name="type_ingredient" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div>
    <div class="form-group">
      <label for="quantite_ingredient">Quantité :</label>
      <input type="number" class="form-control" id="quantite_ingredient" placeholder="Entrez la quantité (mg/ml)" name="quantite_ingredient" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div> 
    <button type="submit" class="btn btn-warning">Valider</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValideity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


<?= $this->include("/ingredient/templates/footer") ?>