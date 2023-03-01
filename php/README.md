#  QUIZZ

This is a PHP script that creates a quiz challenge for the user to answer questions about PHP. The script starts by printing a welcome message and asking for the user's name using the readline() function.

After greeting the user, the script asks if the user is ready to start the quiz by prompting them with a Yes/No question using the readline() function. If the user answers Yes, the quiz starts.

The quiz is comprised of five questions about PHP, each with a correct answer. The questions and answers are stored in an associative array called $questions. The script loops through each question and asks the user for their answer using the readline() function. The user's answer is then compared to the correct answer stored in the $questions array.

If the user's answer is correct, the script gives feedback with a message saying "You are correct!" and increases the user's score by 2 points. If the user's answer is incorrect, the script gives feedback with a message saying "Sorry, the correct answer is:" followed by the correct answer, and decreases the user's score by 1 point.

After all questions have been asked, the final score is displayed to the user with a congratulatory message if the score is above zero. If the user is not ready to start the quiz, the script ends with a message saying "Okay, come back when you're ready!".
