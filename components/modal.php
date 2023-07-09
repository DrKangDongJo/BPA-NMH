

<!-- // function create_modal($bs_target,$button_text,$modal_title,$modal_body){
// return ` -->
<button type="button" class = "btn my-btn-blue mx-auto white-text" style="width:auto"
        data-bs-toggle="modal" data-bs-target="#<?php echo $bs_target?>"><?php echo $button_text?></button>
<!-- Modal -->
<div class="modal fade " id="<?php echo $bs_target?>" tabindex="-1" aria-labelledby="<?php echo $bs_target?>_Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="<?php echo $bs_target?>_Label"><?php echo $modal_title?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php echo $modal_body?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn my-btn-red" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- // `;

// }

// ?> -->