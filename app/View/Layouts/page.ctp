<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('portfolio');
    echo $this->Html->script('jquery-2.1.3.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php echo $this->element('google_analytics'); ?>
<?php echo $this->element('menu'); ?>
    <div class = "container">
        <?php
        echo $this->Html->link('<div class = "topLogo"></div>', '/', array('escape' => false));
        ?>
        <div class = "tagline">Anna Michele Wygant</div>
        <div class = "contentWrap">
            <div class = "content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php echo $this->element('contact'); ?>
    </div>


<?php echo $this->element('sql_dump'); ?>
</body>
</html>
