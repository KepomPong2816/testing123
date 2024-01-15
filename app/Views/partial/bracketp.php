<center>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url('assets/css/bracket.css') ?>">

        <title>March Madness Stock Matchup</title>
    </head>

    <body>
        <header class="hero">
            <div class="hero-wrap">
                <p class="intro" id="intro">Draws</p>
                <!-- <h1 id="headline">Tournament</h1>
                <p class="year"><i class="fa fa-star"></i> 2015 <i class="fa fa-star"></i></p>
                <p>Ballin' Outta Control</p> -->
            </div>
        </header>
        <section id="bracket">
            <?php if (!empty($bra)) {
            ?>
                <div class="container">
                    <div class="split split-one">
                        <div class="round round-one current">
                            <div class="round-details">Quarter-Final<br /><span class="date">March 16</span></div>
                            <ul class="matchup">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[7]['nama'])) {
                                                            echo $bra[7]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[1]['nama'])) {
                                                            echo $bra[1]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="matchup">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[0]['nama'])) {
                                                            echo $bra[0]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[6]['nama'])) {
                                                            echo $bra[6]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="matchup">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[5]['nama'])) {
                                                            echo $bra[5]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[3]['nama'])) {
                                                            echo $bra[3]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="matchup">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[2]['nama'])) {
                                                            echo $bra[2]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/2472/PNG/512/chess_pion_game_icon_149653.png " class=" b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php
                                                        if (isset($bra[4]['nama'])) {
                                                            echo $bra[4]['nama'];
                                                        } else {
                                                            echo "Data not available";
                                                        }
                                                        ?></div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class=" b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- END ROUND ONE -->

                        <div class="round round-two">
                            <div class="round-details">Semi-Final<br /><span class="date">March 18</span></div>
                            <ul class="matchup1">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH1['nama'])) : ?>
                                                            <?php echo $HH1['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH2['nama'])) : ?>
                                                            <?php echo $HH2['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="matchup1">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH3['nama'])) : ?>
                                                            <?php echo $HH3['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH4['nama'])) : ?>
                                                            <?php echo $HH4['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!--  END ROUND TWO -->

                        <div class="round round-three">
                            <div class="round-details">Final<br /><span class="date">March 22</span></div>
                            <ul class="matchup2">
                                <li class="team team-top">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH5['nama'])) : ?>
                                                            <?php echo $HH5['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="team team-bottom">
                                    <div>
                                        <div>
                                            <div class="entry-player-wrap">
                                                <div class="entry-player-image">
                                                    <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png" class="b-error">
                                                </div>
                                                <div class="entry-player-info-wrap">
                                                    <div class="entry-player-name">
                                                        <?php if (isset($HH6['nama'])) : ?>
                                                            <?php echo $HH6['nama']; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="entry-player-flag">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                                        <span class="l">Indonesia</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- END ROUND THREE -->
                    </div>
                </div>
            <?php } else { ?>
                <div style="text-align: center;">
                    <h1>Bracket belum di generate</h1>
                </div>
            <?php } ?>
        </section>
    </body>
</center>
<script>
    const playerDropdowns = document.querySelectorAll('.player-dropdown');
    const playerDropdowns1 = document.querySelectorAll('.player-dropdown1');
    const playerDropdowns2 = document.querySelectorAll('.player-dropdown2');
    const playerDropdowns3 = document.querySelectorAll('.player-dropdown3');
    const playerDropdowns4 = document.querySelectorAll('.player-dropdown4');
    const playerDropdowns5 = document.querySelectorAll('.player-dropdown5');

    playerDropdowns.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih `;
                if (confirm(confirmMsg)) {
                    fetch('/save-data', {
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

    playerDropdowns1.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data1', {
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

    playerDropdowns2.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data2', {
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
    playerDropdowns3.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data3', {
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
    playerDropdowns4.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data4', {
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
    playerDropdowns5.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data5', {
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