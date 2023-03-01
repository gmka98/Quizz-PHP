<?php
echo "<h2>Welcome to this PHP quiz challenge!</h2>";

// Ask for user's name
$name = readline("What's your name?: ");

// Greet the user
echo "Hello " . $name . ", this quiz has 5 questions about PHP, some of them are multiple choice." . PHP_EOL;

// Ask if the user is ready
$answer = readline("Are you ready? (Yes/No): ");

// Check the answer
if (strtolower($answer) === 'yes') {
    // If the user is ready, proceed with the quiz
    $score = 0; // Initialize the score variable

    // Define an array of questions with their respective answers
    $questions = array(
        "What does PHP stand for?" => "Hypertext Preprocessor",
        "Which of the following is not a PHP magic constant?" => "__CLASS__",
        "What is the output of the following code? echo 5+5;' " => "10",
        "Which of the following is not a PHP data type?" => "double",
        "What is the correct way to start a PHP block?" => "<?php",
    );

    // Loop through each question and ask the user
    foreach ($questions as $question => $answer) {
        $user_answer = readline($question . PHP_EOL); // Read the user's answer
        if (strtolower($user_answer) === strtolower($answer)) {
            echo "You are correct!" . PHP_EOL; // Give feedback for a correct answer
            $score += 2; // Increase the score by 2 for a correct answer
        } else {
            echo "Sorry, the correct answer is: " . $answer . PHP_EOL; // Give feedback for an incorrect answer
            $score--; // Decrease the score by 1 for an incorrect answer
        }
    }

    // Display the final score to the user
    echo "Congratulations " . $name . ", your final score is: " . $score . PHP_EOL;

} else {
    // If the user is not ready, end the quiz
    echo "Okay, come back when you're ready!" . PHP_EOL;
}
?>
