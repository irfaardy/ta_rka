<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4>Input RDDKF</h4>
      <hr class="mb-4">
      <?php echo form_open_multipart($action);?>
        <!-- initial object (null or not) -->
        <?php $rddkf = rddkfFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("rddkf/_form", $rddkf) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
