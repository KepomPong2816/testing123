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


<div class="container11 podium">
    <div class="podium__item">
        <p class="podium__city">
        <div class="entry-player-name">
            <?php if (isset($HH7['nama'])) : ?>
                <?php echo $HH7['nama']; ?>
            <?php endif; ?>
        </div>
        </p>
        <div class="podium__rank second">2</div>
    </div>
    <div class="podium__item">
        <p class="podium__city">
        <div class="entry-player-name">
            <?php if (isset($HH8['nama'])) : ?>
                <?php echo $HH8['nama']; ?>
            <?php endif; ?>
        </div>
        </p>
        <div class="podium__rank first">
            <svg class="podium__number" viewBox="0 0 27.476 75.03" xmlns="http://www.w3.org/2000/svg">
                <g transform="matrix(1, 0, 0, 1, 214.957736, -43.117417)">
                    <path class="st8" d="M -198.928 43.419 C -200.528 47.919 -203.528 51.819 -207.828 55.219 C -210.528 57.319 -213.028 58.819 -215.428 60.019 L -215.428 72.819 C -210.328 70.619 -205.628 67.819 -201.628 64.119 L -201.628 117.219 L -187.528 117.219 L -187.528 43.419 L -198.928 43.419 L -198.928 43.419 Z" style="fill: #000;" />
                </g>
            </svg>
        </div>
    </div>
    <div class="podium__item">
        <p class="podium__city">
        <div class="entry-player-name">
            <?php if (isset($HH9['nama'])) : ?>
                <?php echo $HH9['nama']; ?>
            <?php endif; ?>
        </div>
        </p>
        <div class="podium__rank third">3</div>
    </div>
</div>