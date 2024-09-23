<?php require "template/header.php"; ?>

<div class="container mt-5">
    <h1>Nos Habitats</h1>

    <div class="row">
        <!-- Habitat 1 -->
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="habitat1.jpg" class="card-img-top" alt="Habitat 1">
                <div class="card-body">
                    <h5 class="card-title">Habitat 1</h5>
                    <p class="card-text">Description de l'habitat 1.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#animalModal" data-habitat="Habitat 1">Voir les animaux</button>
                </div>
            </div>
        </div>

        <!-- Habitat 2 -->
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="habitat2.jpg" class="card-img-top" alt="Habitat 2">
                <div class="card-body">
                    <h5 class="card-title">Habitat 2</h5>
                    <p class="card-text">Description de l'habitat 2.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#animalModal" data-habitat="Habitat 2">Voir les animaux</button>
                </div>
            </div>
        </div>

        <!-- Habitat 3 -->
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="habitat3.jpg" class="card-img-top" alt="Habitat 3">
                <div class="card-body">
                    <h5 class="card-title">Habitat 3</h5>
                    <p class="card-text">Description de l'habitat 3.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#animalModal" data-habitat="Habitat 3">Voir les animaux</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Animal Details -->
<div class="modal fade" id="animalModal" tabindex="-1" role="dialog" aria-labelledby="animalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Animal details will be displayed here -->
                <p id="animalName"></p>
                <!-- Add more animal details here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to populate modal with habitat details
    $('#animalModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var habitat = button.data('habitat'); // Extract habitat name from data-* attributes

        // Update the modal's content with the habitat name
        var modal = $(this);
        modal.find('.modal-body #animalName').text('Animaux de ' + habitat);
        // Add more logic to fetch and display animal details
    });
</script>

<?php require "template/footer.php"; ?>
