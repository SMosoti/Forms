<?php
class forms{
    private function submit_button($value) {
        echo '<input type="submit" value="' . htmlspecialchars($value) . '">';
    }

    public function signup() {
        ?>
        <h2>Sign Up Form</h2>
        <form action="submit.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <input type="submit" value="Submit">
        </form>
        <?php
    }
    

public function login() {
        ?>
        <h2>Login Form</h2>
        <form action='submit_login.php' method='post'>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <?php $this->submit_button('Login'); ?> <a href="index.php">Don't have an account?</a>
    
            
        </form>
        <?php
    }
}
