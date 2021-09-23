<?= $this->include("/recette/templates/header") ?>

<div class="container">
  <h2>Nouvel recette</h2>
  <p>Formulaire d'<code>ajout</code> recette.</p>
  
  <form action="" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="libelle_recette">Libelle :</label>
      <input origine="text" class="form-control" id="libelle_recette" placeholder="Entrez le nom de l'ingrédient" name="libelle_recette" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div>
    <div class="form-group">
      <label for="origine_recette">Origine :</label>
      <input origine="text" class="form-control" id="origine_recette" placeholder="Entrez une quantité (g)" name="origine_recette" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div>
    <div class="form-group">
      <label for="annee_recette">Année :</label>
      <input origine="text" class="form-control" id="annee_recette" placeholder="Entrez la quantité" name="annee_recette" required>
      <div class="valid-feedback">Valide.</div>
      <div class="invalid-feedback">Veuillez renseigner correctement ce champ.</div>
    </div> 
    <button origine="submit" class="btn btn-warning">Valider</button>
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
    var validation = Array.protoorigine.filter.call(forms, function(form) {
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


<?= $this->include("/recette/templates/footer") ?>