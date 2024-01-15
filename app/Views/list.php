<?= $this->include('partial/header2') ?>
<div class="container mt-3">
    <center>
        <h1 class="mb-4 fw-bold"><strong>ALL EVENT</strong></h1>
    </center>
    <div class="d-flex justify-content-around flex-wrap card-group mt-4">
        <?php if (!empty($compe)) {
            foreach ($compe as $isi) {
        ?>
                <a href="/dtt/<?php if (isset($isi['type_sport'])) echo $isi['type_sport'] ?>" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="<?= base_url('assets/image/' . $isi['upload']) ?>" style="height: 350px; width: 400px; " class="card-img-top" alt="...">
                        <div class="card-body">
                            <p><?php echo $isi['date_column'] ?></p>
                            <h5 class="card-title"><strong><?php echo $isi['title'] ?></strong></h5>
                        </div>
                    </div>
                </a>
            <?php } ?>
        <?php } else { ?>
            <h1>Oops tidak ada kompetisi</h1>
        <?php } ?>
    </div>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>