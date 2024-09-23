<?php require "template/header.php";

$stmt = $pdo->prepare("SELECT sectors.*, images.url AS image_url, GROUP_CONCAT(animals.first_name) AS animal_name
                    FROM sectors
                    LEFT JOIN sector_images ON sectors.sector_id = sector_images.sector_id
                    LEFT JOIN images ON sector_images.image_id = images.image_id
                    LEFT JOIN animals ON sectors.sector_id = animals.sector_id
                    GROUP BY sectors.sector_id"
                );
$stmt->execute();
$sectors = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container mt-5">
    <div class="row">
        <?php foreach ($sectors as $sector) {
            // Check if image URL is empty, if so, use a default image URL
            if (empty($sector['image_url'])) {
                $image_url = "assets/img/rpqc13i5.bmp"; // Replace "assets/img/default.jpg" with your default image path
            } else {
                $image_url = $sector['image_url'];
            }
            ?>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="<?= $image_url ?>" class="card-img-top" alt="<?= $sector['name'] ?> placeholder">
                    <div class="card-body">
                        <h5 class="card-title"><?= $sector['name'] ?></h5>
                        <p class="card-text"><?= $sector['description'] ?></p>
                        <button type="button" class="btn btn-primary mt-3 view-details-btn" 
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-name="<?= $sector['name'] ?>" data-image="<?= $image_url ?>"
                                data-description="<?= $sector['description'] ?>" data-animals="<?= $sector['animal_name'] ?>">
                            Voir plus
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sector Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="modal-sector-image" src="" class="img-fluid" alt="Sector Image">
                    </div>
                    <div class="col-md-6">
                        <h6 class="card-subtitle mb-2 text-muted">Description:</h6>
                        <p id="modal-sector-description" class="card-text">Description of the sector.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Animals:</h6>
                        <ul id="modal-sector-animals" class="list-group">
                            <!-- li will dynamically change -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php" ?>

<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var name = button.data('name'); // Extract info from data-* attributes
        var image = button.data('image');
        var description = button.data('description');
        var animals = button.data('animals').split(',');

        var modal = $(this);
        modal.find('.modal-title').text(name);
        modal.find('#modal-sector-image').attr('src', image);
        modal.find('#modal-sector-description').text(description);

        // Populate animals
        var animalsHtml = '';
        animals.forEach(function(animal) {
            animalsHtml += '<li class="list-group-item">' + animal + '</li>';
        });
        modal.find('#modal-sector-animals').html(animalsHtml);
    });
</script>
