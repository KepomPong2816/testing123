<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css.map') ?>">
<link rel="stylesheet" href="<?= base_url('css/main.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<?= $this->include('partial/header2') ?>
<div>
    <div class="limiter">
        <div class="container-login1001" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login1001 p-l-55 p-r-55 p-t-65 p-b-54" style="margin-top: 25px; background-color: azure;">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        <?php if (isset($selectedevent[0]['title'])) echo $selectedevent[0]['title'] ?>

                    </span>
                    <table class="pp">
                        <tbody>
                            <tr class="mm">
                                <td>Date</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['date_column']))  $tgl =  strtotime($selectedevent[0]['date_column']);
                                                echo date("d M Y", $tgl) ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Time</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['time'])) echo $selectedevent[0]['time'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Organizer</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['organizer'])) echo $selectedevent[0]['organizer'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Location</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['location'])) echo $selectedevent[0]['location'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Participant</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['participant'])) echo $selectedevent[0]['participant'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Contact Person</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['time'])) echo $selectedevent[0]['time'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="card mx-2">
                <img src="<?= base_url('assets/image/' . $selectedevent[0]['upload']) ?>" style="height: 400px; width: 450px; " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong><?php if (isset($selectedevent[0]['title'])) echo $selectedevent[0]['title'] ?></strong></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <?= $this->include('partial/peserta2') ?>
</div>
<div>
    <?= $this->include('partial/bracketp') ?>
</div>
<div>
    <?= $this->include('partial/podium') ?>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>