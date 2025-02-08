document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Verhindert das Standard-Formular-Submit-Verhalten

        // Hier können Sie die Logik hinzufügen, die bei der Formularübermittlung durchgeführt werden soll

        // Leeren des Eingabefelds nach 1 Sekunde
        setTimeout(function() {
            document.querySelector('input[name="antwort"]').value = '';
        }, 1000);
    });

    // Beispiel: Interaktive Elemente wie Quizfragen
    const quizForm = document.querySelector('#quiz-form');
    if (quizForm) {
        quizForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const selectedAnswer = document.querySelector('input[name="quiz"]:checked');
            if (selectedAnswer) {
                alert(`Ihre Antwort: ${selectedAnswer.value}`);
            } else {
                alert('Bitte wählen Sie eine Antwort.');
            }
        });
    }
});
