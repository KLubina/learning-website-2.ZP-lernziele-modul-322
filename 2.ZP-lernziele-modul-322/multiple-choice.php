<?php
// Fragen und Antworten für das Quiz
$fragen = [
    [
        "frage" => "Was versteht man unter Aufgabenangemessenheit nach ISO-9241-110?",
        "antworten" => [
            "A" => "Das System bietet dem Benutzer keine unnötigen Funktionen.",
            "B" => "Das System unterstützt den Benutzer effektiv bei der Erledigung seiner Aufgabe.",
            "C" => "Das System kann auf verschiedene Benutzergruppen angepasst werden.",
            "D" => "Das System bietet grafische Hilfsmittel zur Unterstützung."
        ],
        "richtige_antwort" => "B"
    ],
    [
        "frage" => "Welches Designprinzip ist wichtig für die Gestaltung der Navigation?",
        "antworten" => [
            "A" => "Sie muss lernförderlich sein.",
            "B" => "Sie muss fehlertolerant sein.",
            "C" => "Sie sollte intuitiv und konsistent sein.",
            "D" => "Sie muss individualisierbar sein."
        ],
        "richtige_antwort" => "C"
    ],
    [
        "frage" => "Welche Methode eignet sich, um Benutzern Echtzeit-Hilfe anzubieten?",
        "antworten" => [
            "A" => "FAQs und Support-Seiten",
            "B" => "Chatbots und Live-Support",
            "C" => "Benutzerhandbücher",
            "D" => "Tooltips und modale Dialoge"
        ],
        "richtige_antwort" => "B"
    ]
];

// Einfache Quizlogik
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erhaltene_antworten = $_POST['antworten'];
    $ergebnis = 0;

    foreach ($fragen as $index => $frage) {
        if ($erhaltene_antworten[$index] === $frage['richtige_antwort']) {
            $ergebnis++;
        }
    }

    echo "<div>Sie haben $ergebnis von " . count($fragen) . " Fragen richtig beantwortet!</div>";
}

?>

<form action="" method="post">
    <?php foreach ($fragen as $index => $frage): ?>
        <div>
            <p><?php echo ($index + 1) . '. ' . $frage['frage']; ?></p>
            <?php foreach ($frage['antworten'] as $schluessel => $antwort): ?>
                <label>
                    <input type="radio" name="antworten[<?php echo $index; ?>]" value="<?php echo $schluessel; ?>">
                    <?php echo $antwort; ?>
                </label><br>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <input type="submit" value="Antworten überprüfen">
</form>
