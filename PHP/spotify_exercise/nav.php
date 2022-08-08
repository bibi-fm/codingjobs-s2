<nav>
    <ul>
        <?php if (!isset($_COOKIE['email'])) : ?>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="register.php">Register</a>
            </li>
        <?php else : ?>
            <li>
                <a href="account.php">Account</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        <?php endif; ?>

        <li>
            <a href="songs.php">Songs list</a>
        </li>
    </ul>
</nav>