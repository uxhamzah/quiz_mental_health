function showNextQuestion() {
  var selectValue = document.getElementById('pilihan').value;
  var question2Div = document.getElementById('question2');
  var question3Div = document.getElementById('question3');
  var nextQuestionDiv = document.getElementById('nextQuestion');
  if (selectValue == 0) {
    question2Div.style.display = "block";
    question3Div.style.display = "none";
  } else if (selectValue == 1) {
    question2Div.style.display = "none";
    question3Div.style.display = "block";
  } else {
    question2Div.style.display = "none";
    question3Div.style.display = "none";
  }
}
