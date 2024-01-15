<style>
    body {
        font-family: sans-serif;
    }

    .container11 {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        height: 13cm;
    }

    .podium__item {
        width: 400px;
    }

    .podium__rank {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 35px;
        color: #fff;
    }

    .podium__city {
        text-align: center;
        padding: 0 .5rem;
    }

    .podium__number {
        width: 27px;
        height: 75px;
    }

    .podium .first {
        min-height: 300px;
        background: rgb(255, 172, 37);
        background:
            linear-gradient(333deg,
                rgba(255, 172, 37, 1) 0%,
                rgba(254, 207, 51, 1) 13%,
                rgba(254, 224, 51, 1) 53%,
                rgba(255, 172, 37, 1) 100%);
    }

    .podium .second {
        min-height: 200px;
        background: blue;
    }

    .podium .third {
        min-height: 100px;
        background: green;
    }
</style>

<?php if (!empty($bra)) {
?>
    <div class="container11 podium">
        <div class="podium__item">
            <div class="entry-player-name">
                <select class="form-control player-dropdown60" id="playerDropdown60">
                    <option value="">--Pilih--</option>
                    <?php if (isset($bra[5]['id_user']) && isset($bra[5]['nama'])) : ?>
                        <option value="<?php echo $bra[5]['id_user'] ?>"><?php echo $bra[5]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[3]['id_user']) && isset($bra[3]['nama'])) : ?>
                        <option value="<?php echo $bra[3]['id_user'] ?>"><?php echo $bra[3]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[2]['id_user']) && isset($bra[2]['nama'])) : ?>
                        <option value="<?php echo $bra[2]['id_user'] ?>"><?php echo $bra[2]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[4]['id_user']) && isset($bra[4]['nama'])) : ?>
                        <option value="<?php echo $bra[4]['id_user'] ?>"><?php echo $bra[4]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[0]['id_user']) && isset($bra[0]['nama'])) : ?>
                        <option value="<?php echo $bra[0]['id_user'] ?>"><?php echo $bra[0]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[6]['id_user']) && isset($bra[6]['nama'])) : ?>
                        <option value="<?php echo $bra[6]['id_user'] ?>"><?php echo $bra[6]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[7]['id_user']) && isset($bra[7]['nama'])) : ?>
                        <option value="<?php echo $bra[7]['id_user'] ?>"><?php echo $bra[7]['nama'] ?></option>
                    <?php endif; ?>
                    <?php if (isset($bra[1]['id_user']) && isset($bra[1]['nama'])) : ?>
                        <option value="<?php echo $bra[1]['id_user'] ?>"><?php echo $bra[1]['nama'] ?></option>
                    <?php endif; ?>
                    <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                </select>
            </div>
            <div class="podium__rank second">2</div>
        </div>
        <div class="podium__item">
            <select class="form-control player-dropdown61" id="playerDropdown6">
                <option value="">--Pilih--</option>
                <?php if (isset($bra[5]['id_user']) && isset($bra[5]['nama'])) : ?>
                    <option value="<?php echo $bra[5]['id_user'] ?>"><?php echo $bra[5]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[3]['id_user']) && isset($bra[3]['nama'])) : ?>
                    <option value="<?php echo $bra[3]['id_user'] ?>"><?php echo $bra[3]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[2]['id_user']) && isset($bra[2]['nama'])) : ?>
                    <option value="<?php echo $bra[2]['id_user'] ?>"><?php echo $bra[2]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[4]['id_user']) && isset($bra[4]['nama'])) : ?>
                    <option value="<?php echo $bra[4]['id_user'] ?>"><?php echo $bra[4]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[0]['id_user']) && isset($bra[0]['nama'])) : ?>
                    <option value="<?php echo $bra[0]['id_user'] ?>"><?php echo $bra[0]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[6]['id_user']) && isset($bra[6]['nama'])) : ?>
                    <option value="<?php echo $bra[6]['id_user'] ?>"><?php echo $bra[6]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[7]['id_user']) && isset($bra[7]['nama'])) : ?>
                    <option value="<?php echo $bra[7]['id_user'] ?>"><?php echo $bra[7]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[1]['id_user']) && isset($bra[1]['nama'])) : ?>
                    <option value="<?php echo $bra[1]['id_user'] ?>"><?php echo $bra[1]['nama'] ?></option>
                <?php endif; ?>
                <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
            </select>
            <div class="podium__rank first">
                <svg class="podium__number" viewBox="0 0 27.476 75.03" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1, 0, 0, 1, 214.957736, -43.117417)">
                        <path class="st8" d="M -198.928 43.419 C -200.528 47.919 -203.528 51.819 -207.828 55.219 C -210.528 57.319 -213.028 58.819 -215.428 60.019 L -215.428 72.819 C -210.328 70.619 -205.628 67.819 -201.628 64.119 L -201.628 117.219 L -187.528 117.219 L -187.528 43.419 L -198.928 43.419 L -198.928 43.419 Z" style="fill: #000;" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="podium__item">
            <select class="form-control player-dropdown62" id="playerDropdown6">
                <option value="">--Pilih--</option>
                <?php if (isset($bra[5]['id_user']) && isset($bra[5]['nama'])) : ?>
                    <option value="<?php echo $bra[5]['id_user'] ?>"><?php echo $bra[5]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[3]['id_user']) && isset($bra[3]['nama'])) : ?>
                    <option value="<?php echo $bra[3]['id_user'] ?>"><?php echo $bra[3]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[2]['id_user']) && isset($bra[2]['nama'])) : ?>
                    <option value="<?php echo $bra[2]['id_user'] ?>"><?php echo $bra[2]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[4]['id_user']) && isset($bra[4]['nama'])) : ?>
                    <option value="<?php echo $bra[4]['id_user'] ?>"><?php echo $bra[4]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[0]['id_user']) && isset($bra[0]['nama'])) : ?>
                    <option value="<?php echo $bra[0]['id_user'] ?>"><?php echo $bra[0]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[6]['id_user']) && isset($bra[6]['nama'])) : ?>
                    <option value="<?php echo $bra[6]['id_user'] ?>"><?php echo $bra[6]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[7]['id_user']) && isset($bra[7]['nama'])) : ?>
                    <option value="<?php echo $bra[7]['id_user'] ?>"><?php echo $bra[7]['nama'] ?></option>
                <?php endif; ?>
                <?php if (isset($bra[1]['id_user']) && isset($bra[1]['nama'])) : ?>
                    <option value="<?php echo $bra[1]['id_user'] ?>"><?php echo $bra[1]['nama'] ?></option>
                <?php endif; ?>
                <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
            </select>
            <div class="podium__rank third">3</div>
        </div>
    </div>
<?php } else { ?>
    <div style="text-align: center; margin-top: 2cm;">
        <h1>Podium Belum ada</h1>
    </div>
<?php } ?>

<script>
    const playerDropdowns60 = document.querySelectorAll('.player-dropdown60');
    const playerDropdowns61 = document.querySelectorAll('.player-dropdown61');
    const playerDropdowns62 = document.querySelectorAll('.player-dropdown62');
    playerDropdowns60.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data8', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns61.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data6', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns62.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data7', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
</script>