<div class="disclaimer-alert">
	<h5 class="no-margin-bottom dark-text-color">Please read our 
		<a href="" data-toggle="modal" data-target="#disclaimerModal">disclaimer</a> before posting or searching for a job.
	</h5>
</div>



<!-- custom description modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="disclaimerModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title half-padding-left"><?php the_field('disclaimer_title', 'option'); ?></h4>
      </div>
      <div class="modal-body padded half-padding-top half-padding-bottom no-margin-bottom">
        <?php the_field('disclaimer', 'option'); ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->