<?php session_start(); ?>
<?php include 'data.php'; ?>
<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php z ?></title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div class="container">
            <div class="top">
                <div class="date">
                    <!--2015-01-15 20:08:01-->   
                    
                    <?php echo date($dateFormat); ?>
                </div>
                <div class="menu">
                    <ul>
                        <?php foreach($menu as $item): ?>
                            <li><a href="<?php echo $item['link'] ?>"><?php echo $item['name'] ?></a></li>                            
                        <?php endforeach; ?>
                    </ul>
                    <div class="greeting">                        
                        <?php if(isset($_SESSION['username'])): ?>
                        Hello, dear  <?php echo $_SESSION['username']; ?> (<a href="index.php?page=user&action=logout">Logout</a>)
                        <?php else: ?>
                        <form action="index.php?page=user&action=login" method="POST">
                            Username: <input name="username" type="text" />
                            Password: <input name="password" type="password" />
                            <input type="submit" value="Login" />
                        </form>
                        <?php endif; ?>                       
                    </div>
                </div>
            </div>
            <div class="body">
                <?php processRequest(); ?>
                <?php //phpinfo(); ?>
            </div>
        </div>
    </body>
</html>