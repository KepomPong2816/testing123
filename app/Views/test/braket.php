<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracket Generator</title>
    <style>
        .container {
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        .borderbracket {
            border: 2px solid #ccc;
            padding: 20px;
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .round {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .match {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }

        .participant {
            width: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <label for="total-participants">Total Participants:</label>
    <input type="number" id="total-participants" min="2" />
    <button onclick="createBracket()">Create Bracket</button>

    <div class="borderbracket" id="bracket"></div>

    <script>
        function createBracket() {
            var totalParticipants = document.getElementById('total-participants').value;
            var bracket = document.getElementById('bracket');
            bracket.innerHTML = '';

            var rounds = Math.ceil(Math.log2(totalParticipants));
            var participantsPerMatch = 2;

            for (var round = 1; round <= rounds; round++) {
                var roundContainer = document.createElement('div');
                roundContainer.className = 'round';

                for (var match = 1; match <= totalParticipants / participantsPerMatch; match++) {
                    var matchContainer = document.createElement('div');
                    matchContainer.className = 'match';

                    for (var i = 0; i < participantsPerMatch; i++) {
                        var participantNumber = (match - 1) * participantsPerMatch + i + 1;
                        if (participantNumber <= totalParticipants) {
                            var participant = document.createElement('div');
                            participant.className = 'participant';
                            participant.textContent = 'Participant ' + participantNumber;

                            matchContainer.appendChild(participant);
                        }
                    }

                    roundContainer.appendChild(matchContainer);
                }

                bracket.appendChild(roundContainer);
                participantsPerMatch *= 2;
            }
        }
    </script>
</div>

</body>
</html>
